<?php
            include_once 'account-header.php';
            ?>
<div class="dashboard-content">
    <div class="dashboard-form">
        <div class="row">

            <!-- Profile -->
            <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                <div class="dashboard-list-box">
                    <h4 class="gray">Profile Details</h4>
                    <div class="dashboard-list-box-static">
                        <form method="POST" action="update_profile.php" enctype="multipart/form-data" >
                            <!-- Avatar -->
                            <div class="edit-profile-photo">
                                <img src="<?php echo '../avatars/'.$auth_user['avatar'] ?>" alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload" name="avatar" accept="images/*" />
                                    </div>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="my-profile">
                            
                                <label>Your Name *</label>
                                <input value="<?php echo $auth_user['name'] ?>" name="name" type="text">

                                <label>Phone Number *</label>
                                <input value="<?php echo $auth_user['phone'] ?>" name="phone" type="text">

                                <label>Email Address *</label>
                                <input value="<?php echo $auth_user['email'] ?>" readonly type="text">

                                <label>Your Bio *</label>
                                <textarea  id="notes" cols="30" name="bio" rows="2"><?php echo $auth_user['bio'] ?></textarea>
                            </div>

                            <button class="button">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- Content / End -->
<?php
            include_once 'account-footer.php';
            ?>