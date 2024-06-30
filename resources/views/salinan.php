<?php
// Memanggil file koneksi.php
include 'cekkoneksi.php';

function potongTeks($teks, $panjangMax = 10) {
  if (strlen($teks) > $panjangMax) {
      $teks = substr($teks, 0, $panjangMax) . '...';
  }
  return $teks;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glimpz - Category | 3D Animation</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="script.js"></script>
    <style>
  .modal-box::-webkit-scrollbar {
    display: none;
}
</style>
</head>
<body class="font-poppins">
  <!-- navbar -->
  <div class="navbar shadow-lg bg-base-100 rounded-box mb-10">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52" >
          <li><a>Item 1</a></li>
          <li>
            <a>Parent</a>
            <ul class="p-2">
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </li>
          <li><a>Item 3</a></li>
        </ul>
      </div>
      <a class="btn btn-ghost text-xl" >Glimpz</a>
    </div>
    <div class="navbar-center hidden lg:flex z-[1]">
      <ul class="menu menu-horizontal px-1">
        <li><a>Dashboard</a></li>
        <li><a href="sellerservice.php">Service</a></li>
        <li><a>Orders</a></li>
        <li><a>Earnings</a></li>
      </ul>
    </div>
    <div class="navbar-end">
    <button class="btn btn-ghost btn-circle">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
    </button>
    <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                  <div class="w-8 p-2 border-[1px] border-[#BEBEBE] rounded-full shadow-md shadow-neutral-300">
                    <img src="image/Profile-user.svg" alt="Avatar Tailwind CSS Component" />
                  </div>
                </div>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                  <li>
                    <a class="justify-between">
                      Profile
                      <span class="badge">New</span>
                    </a>
                  </li>
                  <li><a>Settings</a></li>
                  <li><a>Logout</a></li>
                </ul>
              </div>
    
      
    </div>
  </div>
  <!-- navbar end -->
  
  <?php
  $query = "SELECT * FROM `service`";
  $stmt = $pdo->prepare($query);
  $stmt->execute();
   
  $row_count = $stmt->rowCount(); ?>
  <div class="container mx-auto flex justify-start">
    <!-- bagian atas -->
    <div class="w-full h-full">
      <div class="grid grid-cols-2 pl-12 pt-12 pr-12">
        <div>
          <h1 class="font-bold text-2xl">Services</h1>
          <a class="text-xs text-blue-500"><?php echo $row_count ?> Services Found</a>
        </div>
    <div class="flex items-end justify-end">
        <div class="form-control">
          <input type="text" placeholder="Search" class="input input-bordered input-sm text-xs rounded-full mr-3" />
        </div>
        <select class="select select-bordered select-sm text-xs max-w-xs text-blue-700 border-blue-700 focus:outline-2 focus:outline-blue-700">
        <option class="text-zinc-500 font-bold" disabled selected>Category</option>
        <option class="text-slate-700 hover:!bg-blue-50">Video Editing</option>
        <option class="text-slate-700">Video Ads</option>
        <option class="text-slate-700">Visual Effect</option>
        <option class="text-slate-700">Education</option>
        <option class="text-slate-700">Templates</option>
        <option class="text-slate-700">Short Movie</option>
        <option class="text-slate-700">Social Media</option>
        <option class="text-slate-700">2D Animation</option>
        <option class="text-slate-700">3D Animation</option>
        <option class="text-slate-700">Logo Animation</option>
        <option class="text-slate-700">Film Series</option>
        <option class="text-slate-700">Character Animation</option>
        <option class="text-slate-700">Web Animation</option>
        <option class="text-slate-700">Rigging</option>
        <option class="text-slate-700">NFT Animation</option>
      </select>
      <a href="tambahservice.php" class="btn btn-sm bg-blue-700 hover:bg-blue-700 text-white text-xs font-medium border-none rounded-md ml-3">
        <svg class="h-4 w-4 text-white" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.8947 18.3684C14.8947 15.8105 11.7843 13.7368 7.94737 13.7368C4.11044 13.7368 1 15.8105 1 18.3684M19.5263 14.8947V11.4211M19.5263 11.4211V7.94737M19.5263 11.4211H16.0526M19.5263 11.4211H23M7.94737 10.2632C5.38942 10.2632 3.31579 8.18953 3.31579 5.63158C3.31579 3.07363 5.38942 1 7.94737 1C10.5053 1 12.5789 3.07363 12.5789 5.63158C12.5789 8.18953 10.5053 10.2632 7.94737 10.2632Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Add Service</a>
      </div>
    </div>
    
    <!-- bagian atas -->
    <!-- content -->
    <div class="bg-white border-2 px-5 rounded-xl mt-4 mx-10">
    <?php
    $sql = $pdo->query("SELECT * FROM `service`");
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) 
    {

      ?>
        <div class="card card-side bg-base-100 h-20 shadow-xl my-5">
          <figure class="w-32">
          <?php echo "<img src='upload/thumbnail/{$row['Thumbnail']}' class='w-full h-full' alt='Product'/>"; ?>
          </figure>
          <div class="card-body p-5">
            <div class="grid grid-cols-9 gap-4">

              <div class="col-span-1">
                <div class="avatar">
                  <div class="w-10 rounded-full border-2">
                    <img src="image/Profile-user.svg" class="p-3"/>
                  </div>
                </div>
              </div>

              <div class="col-span-2 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Title</li>
                  <li><?php echo $row['Title']; ?></li>
                </ul>
              </div>

           
                <div class="col-span-1 text-start">
                <ul class="text-sm">
                <li class="font-bold">Description</li>
                <?php
                $description = $row['Description']; 
                $potonganDeskripsi = potongTeks($description); 
                ?>
                <li><?php echo $potonganDeskripsi; ?></li>
              </ul>
            </div>

           
              <div class="col-span-3 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Category</li>
                  <li class=""><?php echo $row['Category']; ?></li>
                </ul>
              </div>
              
              

              <div class="col-span-1 grid justify-center items-center">
                            <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                              </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow-md shadow-neutral-300 bg-base-100 font-normal rounded-box w-52">
                                <li><a href="editservice.php?id_service=<?php echo $row['Id_Service']; ?>" name="service_edit"><svg class="w-4 text-green-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M19 7L10.25 17L5 12.4545" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>                                  
                                  Edit</a></li>
                                <li><a onclick="my_modal_delete<?php echo $row['Id_Service'];?>.showModal()"><svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Delete</a></li>
                                <li><a onclick="my_modal_detail<?php echo $row['Id_Service'];?>.showModal(); selectFirstTab(<?php echo $row['Id_Service'];?>);"><svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                  8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Details</a></li>
                              </ul>
                              
                            </div>
                            
              </div>
              <!-- modal delete -->
        <!-- Open the modal using ID.showModal() method -->
        <dialog id="my_modal_delete<?php echo $row['Id_Service'];?>" class="modal">
            <div class="modal-box">
              <h3 class="font-bold text-lg">Hello!</h3>
              <p class="py-4">Apakah anda yakin ingin menghapus?</p>
              <div class="modal-action">
                <form method="dialog">
                  <!-- if there is a button in form, it will close the modal -->
                  <button class="btn">Cancel</button>
                  <?php include "deleteService.php"; ?>
                  <button class="btn bg-red-500 hover:bg-red-500 text-white" name="buttonhapus" ><a href="deleteService.php?Id_Service=<?php echo $row['Id_Service'] ?>">Delete</a></button>
                </form>
              </div>
            </div>
          </dialog>
        <!-- modal delete -->

        <!-- modal detail -->
        <dialog id="my_modal_detail<?php echo $row['Id_Service'];?>" class="modal">
    <!-- content -->
  <div class="modal-box w-full max-w-6xl rounded-2xl shadow-xl">
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
    </form>
    <h3 class="font-bold text-xl mb-3">Detail Service</h3>
    <div class="grid grid-cols-3 gap-x-5">
        <div class="col-span-1 gap-x-20">
            <img class="w-full rounded-xl" src="../Asset/jasa-dummy.png" alt="">
        </div>
        <div>
            <div class="col-span-1">
                <div class="grid gap-y-1.5">
                <?php
                if(isset($row['Id_Service']) )
                {
                  $id_service = $row['Id_Service'];

                  $query = "SELECT * FROM `service` WHERE id_service = :id_service ";
                  $query2 = "SELECT * FROM `type` WHERE Id_Service = :id_service AND type_name = 'Basic'";
                  $query3 = "SELECT * FROM `type` WHERE Id_Service = :id_service AND type_name = 'Standard'";
                  $query4 = "SELECT * FROM `type` WHERE Id_Service = :id_service AND type_name = 'Premium'";

                  $stmt = $pdo->prepare($query);
                  $stmt->bindParam(':id_service', $id_service);
                  $stmt->execute();

                  $stmt2 = $pdo->prepare($query2);
                  $stmt2->bindParam(':id_service', $id_service);
                  $stmt2->execute();

                  $stmt3 = $pdo->prepare($query3);
                  $stmt3->bindParam(':id_service', $id_service);
                  $stmt3->execute();

                  $stmt4 = $pdo->prepare($query4);
                  $stmt4->bindParam(':id_service', $id_service);
                  $stmt4->execute();

                  $row2 = $stmt->fetch(PDO::FETCH_ASSOC);
                }
                  ?>

                    <a class="block text-gray-700 text-sm font-semibold">ID SERVICE</a>
                    <input type="text" value="<?php echo $row2['Id_Service'] ?>" id="id_service" name="id_service" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                    
                    <a class="block text-gray-700 text-sm font-semibold">Title</a>
                    <input type="text"  value="<?php echo $row2['Title'] ?>" id="title" name="title" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                    
                    <a class="block text-gray-700 text-sm font-semibold">Description</a>
                    <textarea id="description" name="description" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-24" disabled><?php echo $row2['Description']; ?></textarea>
                    
                    <a for="title" class="block text-gray-700 text-sm font-semibold">Category</a>
                    <select class="select select-bordered w-full max-w-xs text-black shadow-lg border-[1px]">
                        <option class="text-zinc-500 font-bold" disabled selected><?php echo $row2['Category'] ?></option>
               
                        <option class="text-slate-700 hover:!bg-blue-50" disabled>Video Editing</option>
                        <option class="text-slate-700"disabled>Video Ads</option>
                        <option class="text-slate-700"disabled>Visual Effect</option>
                        <option class="text-slate-700"disabled>Education</option>
                        <option class="text-slate-700"disabled>Templates</option>
                        <option class="text-slate-700"disabled>Short Movie</option>
                        <option class="text-slate-700"disabled>Social Media</option>
                        <option class="text-slate-700"disabled>2D Animation</option>
                        <option class="text-slate-700"disabled>3D Animation</option>
                        <option class="text-slate-700"disabled>Logo Animation</option>
                        <option class="text-slate-700"disabled>Film Series</option>
                        <option class="text-slate-700"disabled>Character Animation</option>
                        <option class="text-slate-700"disabled>Web Animation</option>
                        <option class="text-slate-700"disabled>Rigging</option>
                        <option class="text-slate-700"disabled>NFT Animation</option>
                    </select>
</div>
</div>
</div>
<!-- tabs -->
<div class="col-span-1">
    <div role="tablist" class="tabs tabs-lifted">
                <!-- tab 1 -->
                <input type="radio" id="tab1_<?php echo $row['Id_Service'];?>" name="my_tabs_2" role="tab" class="tab" aria-label="Basic" checked />
                <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
              
              <?php
              while ($row3 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                    $id_type = $row3['Id_Type'];

                    $sql_detail1 = "SELECT * FROM `detail` WHERE Id_Type = :id_type";
                    $stmt_detail1 = $pdo->prepare($sql_detail1);
                    $stmt_detail1->bindParam(':id_type', $id_type);
                    $stmt_detail1->execute();

                    while ($row_detail1 = $stmt_detail1->fetch(PDO::FETCH_ASSOC)) {

                    
              ?>
                <div class="grid gap-y-1.5">
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
                  <input type="text" value="<?php echo $row_detail1['Day']; ?>" id="day" name="title" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                  
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
                  <input type="text" value="<?php echo $row_detail1['Revision']; ?>" id="title" name="title" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                  
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
                  <input type="text" value="<?php echo $row_detail1['Price']; ?>" id="title" name="title" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
          
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
                  <textarea id="description" name="description" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-20" disabled><?php echo $row_detail1['Descriptions']; ?></textarea>
                </div>
            </div>
          <?php
              }
          }
          ?>
    
            <!-- tab2 -->
            <input type="radio" id="tab2_<?php echo $row['Id_Service'];?>" name="my_tabs_2" role="tab" class="tab" aria-label="Standard" />
            <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">

            <?php
              while ($row4 = $stmt3->fetch(PDO::FETCH_ASSOC)){
                $id_type = $row4['Id_Type'];

                $sql_detail2 = "SELECT * FROM `detail` WHERE Id_Type = :id_type";
                $stmt_detail2 = $pdo->prepare($sql_detail2);
                $stmt_detail2->bindParam(':id_type',$id_type);
                $stmt_detail2->execute();

                while ($row_detail2 = $stmt_detail2->fetch(PDO::FETCH_ASSOC)){

            ?>
            <div class="grid gap-y-1.5">
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
                  <input type="text" value="<?php echo $row_detail2['Day'] ?>" name="Day" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                  
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
                  <input type="text" value="<?php echo $row_detail2['Revision'] ?>" id="revisi" name="revisi" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                  
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
                  <input type="text" value="<?php echo $row_detail2['Price'] ?>" id="Price" name="Price" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
    
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
                  <textarea id="Description" name="Description" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-20" disabled><?php echo $row_detail2['Descriptions'] ?></textarea>
                </div>
            </div>
          <?php
            }
          }
          ?>
            <!-- tab 3 -->
    
            <input type="radio" id="tab3_<?php echo $row['Id_Service'];?>" name="my_tabs_2" role="tab" class="tab" aria-label="Premium" />
            <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
            <div class="grid gap-y-1.5">
                <?php
                  while ($row5 = $stmt4->fetch(PDO::FETCH_ASSOC)){
                    $id_type = $row5['Id_Type'];

                    $sql_detail3 = "SELECT * FROM `detail` WHERE Id_Type = :id_type";
                    $stmt_detail3 = $pdo->prepare($sql_detail3);
                    $stmt_detail3->bindParam(':id_type', $id_type);
                    $stmt_detail3->execute();

                    while ($row_detail3 = $stmt_detail3->fetch(PDO::FETCH_ASSOC)){
                ?>
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
                  <input type="text" value="<?php echo $row_detail3['Day'] ?>" id="title" name="title" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                  
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
                  <input type="text" value="<?php echo $row_detail3['Revision'] ?>" id="title" name="title" class="shadow-lg border rounded py-2 px-3 w-full d" disabled>
                  
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
                  <input type="text" value="<?php echo $row_detail3['Price'] ?>" id="title" name="title" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
          
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
                  <textarea id="description" name="description" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-20" disabled><?php echo $row_detail3['Descriptions'] ?></textarea>
                </div>
            </div>
            <?php
                  }
            }
            ?>
    
          </div>
        </div>
    </div>
    </div>
</dialog>
        <!-- modal detail -->

            </div>
          </div>
        </div>
        <?php } ?>

<!-- row 2 -->
    
        <!-- modal detail -->

        
<!-- row 3 -->
       
        <!-- row 4 -->
       
<!-- row 5 -->
        
        <!-- content -->
        <script>
          function selectFirstTab(serviceId) {
            var tab1 = document.getElementById('tab1_' + serviceId);
            tab1.checked = true;
          }
        </script>
</body>
</html>
