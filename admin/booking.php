<!DOCTYPE html>
<html>
    <head>
        <title>booking details</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" 
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body background="https://news.uthscsa.edu/wp-content/uploads/2020/03/iStock-1141061856.jpg">
        <div class="container" >
        <h1 style="margin-top:40px;color: white;" class=" text-center display-4 font-weight-bold ">Booking Details</h1>
            <div class="table-responsive">
            <table style="margin-top:30px;" class="table table-bordered">
                
                <thead>
                    <tr style="color: white;font-size: 23px;" >
                            <th class=" text-center "  >id</th>
                            <th class=" text-center "  >Name</th>
                            <th class=" text-center "  >Email</th>
                            <th class=" text-center ">Date</th>
                            <th class=" text-center ">Timeslot</th>
                            
                         <!--   <th colspan="2" class=" text-center ">-->
                                <th>Operation</th>
                        </tr>
                    </thead>

                    

                    <tbody>

                    <?php 
                      include '../dbconnect.php';
                      $selectquery = "SELECT * FROM bookings ";
                      $query = mysqli_query($conn,$selectquery );
                      $nums = mysqli_num_rows($query);
                     
                      while( $res = mysqli_fetch_array($query) )
                      {?>
                        <tr style="color: white;">
                        <td><?php echo $res['id'];?></td>
                        <td><?php echo $res['name'];?></td>
                        <td><span class="email-style"><?php echo $res['email'];?></span></td>
                        <td><?php echo $res['date'];?></td>
                        <td><?php echo $res['timeslot'];?></td>
                      
                      <!--  <td><i class="fa fa-edit" aria-hiddeen="true"></i></td> -->
                        <td><a href="delete.php?idth=<?php echo $res['id']; ?>"data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hiddeen="true"></i></a></td>
                       </tr>
                    <?php  }
    
                    ?>

                        
                    </tbody>
                </table>

            </div>
        </div>
    </body>
</html>

