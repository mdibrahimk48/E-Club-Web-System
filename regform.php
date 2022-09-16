
<h2>Give Your information here</h2>

<center><h2><span class="label label-success" id="result"></span></h2></center>


                     <div class="col-lg-12">
                      
                       <form action="" method="post" enctype="multipart/form-data"  id="regform">
                       <div class="row">
                       <input type="hidden" name="id" id="id" value="<?php echo $id?>"/>
                       <input type="hidden" name="recordid" id="recordid" value="<?php echo $row['recordid'];?>"/>
                 
                       <div class="col-lg-6">

                        <div class="form-group show-border"> 
                            <span class="btn btn-default btn-file">
                               
                                <label class="control-label">Browse image  : </label>
                                <span class="must">*</span>
                                <span class='label label-danger' id="imagec"></span>
                                <span class="label label-primary">File type : jpeg, jpg, png || Max size : 30 kb</span>
                                <input class="form-control" id="image" name="image" type="file"/>
                            </span>

                        </div>

                         <div class="form-group">
                            <label class="control-label">Reason of joining : </label>
                            <span class="must">*</span>
                            <span class='label label-danger' id="reasonofjoiningc"></span>
                            <textarea class="form-control" rows="5" name="reasonofjoining" id="reasonofjoining"></textarea>
				        </div>

                           <div class="form-group">
                                <label class="control-label">Facebook ID name : </label>
                                <input type="text"  class="form-control"  name="fcaebookidname" id="fcaebookidname"/>
                           </div>

                         <div class="form-group">
                                   <label class="control-label">Facebook profile link : </label>
                                <input type="text"  class="form-control" name="facebookprofilelink" id="facebookprofilelink"/>
                        </div>
                        
                        <button type="button" name="insert" class="btn btn-primary pull-right" id="button">SUBMIT</button>
                     </div>
                     
                
                 </div>
                 </form>
                 
                 
            </div>
 
                        
                 
