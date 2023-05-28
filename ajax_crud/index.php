
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
											<button type="submit" name="btn" class="add-btn btn btn-info px-5">Add</button>
											<button type="submit" style="display:none"  class="update-btn btn btn-info px-5">Update</button>
											
										</div>
									</div>
                                   
								</div>
							</div>
						</div>
					</div>
				</div>

				<table class="table table-striped mx-auto">
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody class="alldata">

					</tbody>
                 </table>
                

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="ajax.js"></script>
</body>
</html>