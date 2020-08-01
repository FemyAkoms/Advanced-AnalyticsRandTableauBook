<div class="col-md-3">
    <div class="leftblueside">
        <div class="">
            <div class="flex-container forpaddin2sideinblue1 desk">
                <!-- <div class="forbluesideimg">
                    <img src="images/user-default.png" alt="" class="willsmithimage">
                </div> -->
                <div class="danial_mitev_textpd">
                    <div class="danial_mitev_textpd ttt">
                        <p>{{user.first_name}} {{user.last_name}}</p>
                    </div>
                    <div class="danial_mitev_textpd2" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor: pointer">
                        <p><i class="fas fa-eye eyeicon"></i>Edit Profile</p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalScrollableTitle">View Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="container ">
                                            <div class="form-row">
                                                <div class="col">
                                                    <!-- First name -->
                                                    <div class="md-form">
                                                        <label class="fristname_design">EMAIL </label>
                                                        <input type="text" class="emailHover form-control ipfcdesign" placeholder="Your Email" v-model="userPro.email" disabled required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <!-- First name -->
                                                    <div class="md-form">
                                                        <label class="fristname_design">FRIST NAME </label>
                                                        <input type="text" class="form-control ipfcdesign" placeholder="Your Frist Name" v-model="userPro.first_name" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <!-- Last name -->
                                                    <div class="md-form">
                                                        <label class="fristname_design">LAST NAME </label>
                                                        <input type="text" class="form-control ipfcdesign" placeholder="Your Last Name" v-model="userPro.last_name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <!-- Last name -->
                                                    <div class="md-form">
                                                        <label class="fristname_design">PHONE </label>
                                                        <input type="text" class="form-control ipfcdesign" placeholder="Your Phone Number" v-model="userPro.phone" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary btn-sm" @click.prevent="updateUserProfile($event)">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                </div>
            </div>
            <div class="row mb-2 px-4 formyaccountde" style="cursor:pointer">
            </div>
         <div>