<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<div id="form6" class="form">
            <table class="tabel" style="margin-left 10%">
                <tr>
                	<th colspan="17"> Data Pelanggan</th>
                    <th colspan="12"> Progress</th>         
                </tr>
                <tr>
                	<td>No</td>
                	<td>Cust_Name</td>
                	<td>Cust_Ship</td>
                    <td>City</td>
                    <td>Customer_Segmen</td>
                    <td>Product</td>
                    <td>BW_Packet</td>
                    <td>One_Time_Charge</td>
                    <td>Abonemen</td>
                    <td>Sales_by</td>
                    <td>AM_Name</td>
                    <td>AM_Phone</td>
                    <td>Customer_Phone</td>
                    <td>Contract_Date</td>
                    <td>Due_Date_Live</td>
                    <td>Tech_Data</td>

                    <td>Input_Date</td>
                	<td>Speedy_Number</td>
                	<td>Date_of_Progress</td>
                    <td>I-Siska_Status</td>
                    <td>Tenoss_Status</td>
                    <td>Status</td>
                    <td>Additional_Information</td>
                    <td>One_Time_Charge</td>
                    <td>Follow_up</td>
                    <td>Unit_in_Charge</td>
                    <td>PIC_Name</td>
                    <td>PIC_Number</td>
                    <td>Put_in_Service_Date</td>
                </tr>
        <?php
          foreach($isiska->result() as $data);
          {
            echo "<tr><td td style='text-align:center'>".$data->No."</td></td>";
            echo "<td style='text-align:center' text-align:center>".$data->Cust_Name."</td>";
            echo "<td style='text-align:center'>".$data->Cust_Ship."</td>";
            echo "<td style='text-align:center'>".$data->City."</td>";
            echo "<td style='text-align:center'>".$data->Customer_Segmen."</td>";
            echo "<td style='text-align:center'>".$data->Product."</td>";
            echo "<td style='text-align:center'>".$data->BW_Packet."</td>";
            echo "<td style='text-align:center'>".$data->One_Time_Charge."</td>";
            echo "<td style='text-align:center'>".$data->Abonemen."</td>";
            echo "<td style='text-align:center'>".$data->Sales_by."</td>";
            echo "<td style='text-align:center'>".$data->AM_Name."</td>";
            echo "<td style='text-align:center'>".$data->AM_Phone."</td>";
            echo "<td style='text-align:center'>".$data->Customer_Phone."</td>";
            echo "<td style='text-align:center'>".$data->Contract_Date."</td>";
            echo "<td style='text-align:center'>".$data->Due_Date_Live."</td>";
            echo "<td style='text-align:center'>".$data->Tech_Data."</td>";
            echo "<td style='text-align:center'>".$data->Input_Date."</td>";
            echo "<td style='text-align:center'>".$data->Speedy_Number."</td>";
            echo "<td style='text-align:center'>".$data->Date_of_Progress."</td>";
            echo "<td style='text-align:center'>".$data->ISiska_Status."</td>";
            echo "<td style='text-align:center'>".$data->Tenoss_Status."</td>";
			echo "<td style='text-align:center'>".$data->Status."</td>";
            echo "<td style='text-align:center'>".$data->Additional_Information."</td>";
            echo "<td style='text-align:center'>".$data->Follow_up."</td>";
            echo "<td style='text-align:center'>".$data->Unit_in_Charge."</td>";
            echo "<td style='text-align:center'>".$data->PIC_Name."</td>";
            echo "<td style='text-align:center'>".$data->PIC_Number."</td>";
            echo "<td style='text-align:center'>".$data->Put_in_Service_Date."</td>";?>            

          </tr>
          <?php
          }
        ?>
            </table>
        </div>
       </body>
<style type="text/css">
#logo{
	height: 40px;
}
.header{
	text-align: center;
	font-size: 12px;
}
#head1{
	background: red;
}
#head3{
	background: green;
}
#head2 {
    margin-top: 0px;
}
#logo{
	padding-left: 100px;
	padding-right: 600px;
}
.menu{
	padding-right: 40px;
}
#profil{
	border-left: 1px solid rgba(147, 184, 189,0.8);
	margin-left: 120px;
	padding-top: 32px;
	padding-bottom: 32px;
	padding-left: 10px; 
	border-spacing: 1100px;
}
a{
	text-decoration: none;
	 font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;
	 font-weight: bold;
	 color: black; 	
}
.PPP{
	font-size: 16px;
}
.pro
{
  font-size: :12px;
}
h2, #upload{
	margin-left: 150px;
}
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/slider.js"></script>
<script type="text/javascript">
</style>
</html>