<?php

class GlobalClass extends Model
{
	
	    
    public function addinfo($page)
    { 
    	    
        
        // check if counter exsist and update
    	if($this->getHits($page))
    	{
    	//A counter for this page  already exsists. Now we have to update it.
    
    		$updatecounter = $this->updateHits($page);
    		if (!$updatecounter) 
    		{
    		die ("Can't update the counter : " . mysql_error()); // remove ?
    		}
    	
    	} 
    	else
    	{
    	// This page did not exsist in the counter database. A new counter must be created for this page.
    
    		$insert = $this->insertHits($page);
    	
    		if (!$insert) 
    		{
        		die ("Can\'t insert into hits : " . mysql_error()); // remove ?
    		}
    	}
    	
        
        //add IP and user-agent and time -gather user data
        $ip= $_SERVER["REMOTE_ADDR"]; 
        $agent =$_SERVER["HTTP_USER_AGENT"];
        $datetime =date("Y/m/d") . ' ' . date('H:i:s') ;
        
    
        if(!$this->getInfo($ip)) // check if the IP is in database
        {
        	// if not , add it.	
        	$adddata = $this->insertInfo($ip,$agent,$datetime);
			
        	if (!$adddata) 
        	{
        	    die('Could not add IP : ' . mysql_error()); // remove ?
        	}
        }
    
        // delete the first entry in info if rows > $maxrows 
        $this->deleteInfo();        	
    
    } 
	
	public function getHits($page)
	{
		$sql = "SELECT page FROM hits WHERE page = ?";
		
		$this->_setSql($sql);
		$pageDetails = $this->getRow(array($page));
		
		if (empty($pageDetails))
		{
			return false;
		}
		
		return $pageDetails;		
	}
	
	public function insertHits($page)
	{
		$count1 = 1;
		$sql = "INSERT INTO hits (page, count)VALUES (?, ?)";
		$data = array(
			$page,
			$count1
		);
		
		$sth = $this->_db->prepare($sql);
		return $sth->execute($data);
	}
	
	public function updateHits($page)
	{
		$sql = "UPDATE hits SET count = count+1 WHERE page = '$page'";
		$sth = $this->_db->prepare($sql);
		$updatesql = $sth->execute($data);
		
		
		if (!$updatesql)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	
	public function getInfo($ip)
	{
		$sql = "SELECT ip_address FROM info WHERE ip_address = ?";
		$this->_setSql($sql);
		$ipDetails = $this->getRow(array($ip));
		
		if (empty($ipDetails))
		{
			return false;
		}
		else
		{
			return $ipDetails;
		}
	}
	
	public function insertInfo($ip,$agent,$datetime)
	{
		
		$sql = "INSERT INTO info (ip_address, user_agent, datetime) VALUES(?,?,?) ";
		
		$data = array(
			$ip,
			$agent,
			$datetime
		);
		
		$sth = $this->_db->prepare($sql);
		return $sth->execute($data);
	}
	
	public function deleteInfo()
	{
		$maxrows = 50;		
		$sql = "select count(*) from info";
		$this->_setSql($sql);
		$num_rows=0;
		$num_rows = $this->getCount();
		
		$to_delete = $num_rows- $maxrows;
		
		
		
        if($to_delete > 0)
        {
        	for ($i = 1; $i <= $to_delete; $i++) 
        	{
				$sql = "DELETE FROM info ORDER BY id LIMIT 1";
				$this->_setSql($sql);
				$delete = $this->getRow();
        		if (!$delete) 
        		{
        		    die('Could not delete : ' . mysql_error()); // remove ?
        		}
        	}
        }
	}
	
	public function getHitInfoDetails()
	{
		$output = '';
			$sql = "SELECT SUM(count)  AS totalhits FROM hits";
			$this->_setSql($sql);
			$totalhits = $this->getRow();
			$totalhits = $totalhits['totalhits'];
			
			$output .= '<h3>Hits</h3>' ;

			$sql = "SELECT * FROM hits ORDER BY count DESC";
			$this->_setSql($sql);
			$t_hits = $this->getAll();
			
			$output .= "<table width='100%' border='0'>";
			$output .= '	<tr>
				<td height="2" bgcolor="#1AC414" width="400">Page</td> 
				<td height="2" bgcolor="#1AC414" width="169"> Hits</td>
				</tr>' ;
				
			foreach ($t_hits as $t):
			
				$output .= '<tr><td bgcolor="#75D169">'; 
				$output .= $t['page'];
				$output .= '</td><td bgcolor="#75D169">'; 
				$output .= $t['count'];
				$output .= '</td></tr>'; 	
			
			endforeach;
			
			$output .= "<tr><td bgcolor=\"#1AC414\"> <strong> Total Hits </strong> </td><td bgcolor=\"#1AC414\"> <strong> $totalhits </strong> </td></tr>" ;
			$output .= "</table><br /> ";

	
		$sql = "SELECT MAX(id) as mid FROM info";
		$this->_setSql($sql);
		$totalips = $this->getRow();
		$totalips = $totalips['mid'];

		$output .= '<h3> Visitors </h3>' ;

		
		$sql = "SELECT * FROM info ORDER BY id DESC";
		$this->_setSql($sql);
		$t_info = $this->getAll();

		$output .= "<table width='100%' border='0'>";
		$output .= '<tr> <td width="200" bgcolor="#1AC414">  IP </td> <td height="2" bgcolor="#1AC414" width="400">User agent</td> <td height="2" bgcolor="#1AC414" width="169"> Date &amp; Time</td></tr>';

		// keeps getting the next row until there are no more to get
		foreach ($t_info as $t_i):
		
			// Print out the contents of each row into a table
			$output .= '<tr><td bgcolor="#75D169">'; 
			$output .= $t_i['ip_address'];
			$output .= '</td><td bgcolor="#75D169">'; 
			$output .= $t_i['user_agent'];
			$output .= '</td><td bgcolor="#75D169">'; 
			$output .= $t_i['datetime'];
			$output .= "</td></tr>"; 		
		
		endforeach;
		
			$output .= "<tr><td bgcolor=\"#1AC414\"> <strong> Total unique IP´s </strong> </td><td bgcolor=\"#1AC414\"> <strong> $totalips </strong> </td></tr>" ;
			$output .= "</table><br /> ";

		return  $output;
	}
}
