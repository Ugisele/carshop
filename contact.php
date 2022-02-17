 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> car rent</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <!-- starting menu -->
    <div class="page">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">
                   CAR RENT
                </h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUTUS</a></li>
                    <li><a href="products.html">PRODUCTS</a></li>
                    <li><a href="contact.php">CONTACTUS</a></li>
                </ul>
            </div>
            </div>
            </div>
            <br><br><br>

                <div class="info">
                    <div class="registor">
                        <h3>Enter Client transaction Details</h3>
                        <div id="error"></div>
                        <form id="form" method="Post">
                            <div>
                                <div>
                                    <label for="Name">Names</label>
                                    <input id="Name" placeholder="Name" type="text" name="name" autocomplete="off">
                                </div>
                                <div>
                                    <label for="Telephone">Telephone</label>
                                    <input id="Telephone" placeholder="+250 " type="text" name="telephone" autocomplete="off">
                                </div>
                                <div>
                                    <label for="Amount">Amount paid</label>
                                    <input id="Amount" placeholder="from 250$" name="amount" autocomplete="off">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for="Type">Cars available</label>
                                            <select name='Cars available'>
                                                <option value="Brabus S500 (5.0l V8)"> Brabus S500 (5.0l V8)</option>
                                                <option value="Brabus T 13 Limousine (s 640">Brabus T 13 Limousine (s 640)</option>
                                                <option value="Brabus T65S (S65 AMG)"> Brabus T65S (S65 AMG)</option>
                                                <option value="Brabus Rocket 900 (900 hp/1500Nm)">Brabus Rocket 900 (900 hp/1500Nm)</option>
                                                <option value="Brabus S500 (5.0l V8)"> Brabus S500 (8.0l V8)</option>
                                                <option value="Brabus T 13 Limousine (s 640">Brabus T 20 Limousine (s 700)</option>
                                                <option value="Brabus S500 (5.0l V8)"> Brabus S500 (5.0l V8)</option>
                                                <option value="Brabus T 13 Limousine (s 640">Brabus T 13 Limousine (s 640)</option>
                                                <option value="Brabus S500 (5.0l V8)"> Brabus S500 (5.0l V8)</option>
                                                <option value="Brabus T 13 Limousine (s 640">Brabus T 13 Limousine (s 640)</option>
                                              
                                            </select>
                                        
                                </div>
                                <div>
                                    <label for="Date">Date</label>
                                    <input type="date" id="Date" required name="date">
                                </div>
                                <button type="submit" name="submit" id="btn">submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="print">
                        <h3>Client Transaction List</h3>
                        <table>
                            <tr>
                                <th>Num</th>
                                <th>Name</th>
                                <th>Telephone</th>
                                <th>Amount</th>
                                <th>car type</th>
                                <th>Date</th>
                                <th>Operations</th>
                            </tr>
                            
                             <?php
                                // $sql= "select * from `clients`";
                                // $result=mysqli_query($conn,$sql);

                                // if ($result) {
                                // while($row=mysqli_fetch_assoc($result)){
                                //     $id=$row['id'];
                                //     $name=$row['names'];
                                //     $telephone=$row['telephone'];
                                //     $amount=$row['amount'];
                                //     $car_type=$row['car type'];
                                //     $date=$row['dateop'];

                                //     echo '
                                //     <tr>
                                //         <td>'.$id.'</td>
                                //         <td>'.$name.'</td>
                                //         <td>'.$telephone.'</td>
                                //         <td>'.$amount.'</td>
                                //         <td>'.$car_type.'</td>
                                //         <td>'.$date.'</td>
                                //         <td>
                                //             <div>
                                //                 <button class="green"><a href="Update.php?updateid='.$id.'">Update</a></button>
                                //                 <button class="red"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                                //             </div>
                                //         </td>
                                //     </tr>';
                                // }
                                
                                // } 
	                        ?> 

				  </table>
			</div>
        </div>
                        </table>
                    </div>
                </div>
                        
        
    
</body>
</html>