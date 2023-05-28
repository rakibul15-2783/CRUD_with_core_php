
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php  ?>

				<div class="row">
					<div class="col-xl-9 mx-auto">
						
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Add Product</h5>
									</div>
									<hr/>
                                    <?php  
                                       include 'classes.php';
                                       $obj = new Student;

                                      if(isset($_POST['btn'])){
                                        echo $obj->insert($_POST);
                                      }
                                      if(isset($_GET['active'])){
                                        $id = $_GET['active'];
                                        $obj->active($id);
                                        header("location:oopcrud.php");
                                      }
                                      if(isset($_GET['inactive'])){
                                        $id = $_GET['inactive'];
                                        $obj->inactive($id);
                                        header("location:oopcrud.php");
                                      }

                                      //for delete

                                      if(isset($_GET['delete'])){
                                        $id = $_GET['delete'];
                                        $obj->delete($id);
                                        header("location:oopcrud.php");
                                      }


                                    ?>
                                    <form action="" method="POST">
                                       
									<div class="row mb-3">
										<label for="inputEnterYourName" class=" col-sm-3 col-form-label">Enter Your Product Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="category-name form-control" id="category-name" placeholder="Enter Product Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Product Description</label>
										<div class="col-sm-9">
											<input type="text" name="des" class="category-des form-control" id="category-des" placeholder="Product Description">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Price</label>
										<div class="col-sm-9">
											<input type="text" name="price" class="category-price form-control" id="category-price" placeholder="Price">
										</div>
									</div>
									
									<div class="row mb-3">
										<label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Status</label>
										<div class="col-sm-9">
											<select name="status" class="category-status form-control" id="category-status">
                                                <option value="">-----Select Status-----</option>
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
										</div>
									</div>
									
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" name="btn" class="category-add btn btn-info px-5">Add</button>
											
										</div>
									</div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
 
                <div class= "col-xl-9 mx-auto">
                    <table class=" table" border="1" >
                        <thead >
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             
                             $obj = new Student;
                             $s = $obj->show();
                             while($data = $s->fetch_assoc()){
                                if($data['status']=="1"){
                                    $status = '<a href="oopcrud.php?active='.$data['id'].'" class="btn btn-info btn-sm">Active</a>';
                                }
                                else{
                                    $status = '<a href="oopcrud.php?inactive='.$data['id'].'" class="btn btn-success btn-sm">Inctive</a>';
                                }
                                echo '<tr>
                                <td>'.$data['name'].'</td>
                                <td>'.$data['des'].'</td>
                                <td>'.$data['price'].'</td>
                                <td>'.$status.'</td>
                                <td>
                                     <a href="edit.php?id='.$data['id'].'" class="btn btn-info btn-sm" >Edit</a>
                                     <a href="oopcrud.php?delete='.$data['id'].'" class="btn btn-danger btn-sm" >Delete</a>
                                     <button  data-bs-toggle="modal" data-bs-target="#delete"  class="btn btn-danger btn-sm" >Delete</button>
                                </td>
                                </tr>';
                                ?>
                                <!-- Modal -->
<div class="modal fade" id="delete " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation Messege</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure want to Delete this Item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>


                        <?php     }
                            ?>
                        </tbody>

                    </table>
                </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>