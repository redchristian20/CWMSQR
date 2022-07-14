<?php
    $output = '
    <h3>Certificate Verification</h3>
   <div class="table-responsive">
   <table class="table table-bordered table-striped">
       <tr>
           <th>Sr. No</th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Phone</th>
           <th>Email Address</th>
           <th>Code</th>
           <th>QR Link</th>
       </tr>
';
$count = 0;
if($attendees->num_rows() > 0)
{
   foreach($attendees->result() as $row)
   {
       $output .= '
       <tr>
           <td>'.$row->id.'</td>
           <td>'.$row->first_name.'</td>
           <td>'.$row->last_name.'</td>
           <td>'.$row->phone.'</td>
           <td>'.$row->email.'</td>
           <td><a href='.base_url().'show_certificate/'.$row->participant_code.'>'.$row->participant_code.'</a></td>
           <td><img src="'.$row->participant_qr.'" alt='.$row->participant_qr.'></td>
       </tr>
       ';
   }
}
else
{
   $output .= '
   <tr>
       <td colspan="7" align="center">Data not Available</td>
   </tr>
   ';
}
$output .= '</table></div>';
echo $output;


?>