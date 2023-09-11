
 
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Thêm sách mới</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">


<form class="form-horizontal well span4" action="controller.php?action=add" method="POST" autocomplete="off">
 <div class="col-md-12"> 
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="IBSN">IBSN</label><input class="form-control " id="IBSN" name="IBSN" type="text"  /></div>
        </div> 
    </div>
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookTitle">Tiêu đề</label><input class="form-control " id="BookTitle" name="BookTitle" type="text"  /></div>
        </div>
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookDesc">Chủ đề</label><input class="form-control " id="BookDesc" name="BookDesc" type="text"  /></div>
        </div>
    </div>  
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="Author">Tác giả</label><input class="form-control " id="Author" name="Author" type="text"  /></div>
        </div>
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Ngày XB</label>
             <div class='input-group date'>
                    <input type='text' class="form-control" name="PublishDate" id="datepicker" ="Select Date" readonly="false" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
          </div>
        </div>
    </div>  
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookPublisher">Nhà XB</label><input class="form-control " id="BookPublisher" name="BookPublisher" type="text"  /></div>
        </div>
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="Category">Thể loại</label>
                 <select class="form-control " name="Category" id="Category">
                      <?php
                      $categ = new Category();
                      $cur = $categ->listofcategory(); 
                      foreach ($cur as $category) {
                        echo '<option>'.$category->Category.' </option>';
                      }

                   ?>
              
            </select> 
          </div>
        </div>
    </div> 
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="DDecimal">Dewey Decimal</label><input class="form-control " id="DDecimal" name="DDecimal" type="text"  readonly="true" /></div>
        </div>
        
    </div>   
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookPrice">Giá</label><input class="form-control " id="BookPrice" name="BookPrice" type="text"  /></div>
        </div>
          
    </div>   
</div>

       <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "idno"></label>

                <div class="col-md-8">
                  <button class="btn btn-primary" name="savecourse" type="submit" ><span class="fa fa-save"></span> Lưu</button>
               <!--   <button class="btn btn-primary" name="saveandnewcourse" type="submit" ><span class="fa fa-save"></span> Save and Add new</button> -->
                </div>
              </div>
            </div>

         
            
  </form> 

</div>
</div>
</div>