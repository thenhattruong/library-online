 <h1 class="mt-4">Bảng điều khiển</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Bảng điều khiển</li>
                        </ol>
                      <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Sách có sẵn</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="books/index.php">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Người mượn</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="borrower/index.php">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Sách mượn</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="borrowed/index.php">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Sách trả</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="returned/index.php">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Kho sách</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Tiêu đề</th>
                                                <th>Chủ đề</th>
                                                <th>Thể loại</th>
                                                <th>Số lượng</th> 
                                            </tr>
                                        </thead> 
                                        <tbody>

                                            <?php 
                                                     $mydb->setQuery("SELECT *, sum(BookQuantity) as qty FROM `tblbooks` WHERE Status='Available' GROUP BY BookTitle");   
                                                    $cur = $mydb->loadResultlist();
                                                    foreach ($cur as $result) {
                                                        echo '<tr>';  
                                                        echo '<td >'. $result->BookTitle.'</td>';
                                                        echo '<td>'.  $result->BookDesc.'</td>'; 
                                                        echo '<td>'. $result->Category.'</td>';  
                                                        echo '<td>'. $result->qty.'</td>';


                                                        echo '</tr>';

                                                  
                                                }  
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Lịch sử giao dịch</div>
                                    <div class="card-body">
                                        <div class="table-responsive"> 
 
                                                <table id="dataTable" class="table table-bordered table-hover" cellspacing="0"  >
                                                
                                                  <thead>
                                                    <tr> 
                                                        <th>IBSN</th>
                                                        <th>Tiêu đề</th> 
                                                        <th>Người mượn</th> 
                                                        <th>Ngày mượn</th>
                                                        <th>Ngày đến hạn</th> 
                                                        <th>Ngày trả</th>
                                                        <th>Ghi chú</th> 
                                                    </tr>   
                                                  </thead>
                                                  <tbody>
                                                    <?php 
                                                    $mydb->setQuery("SELECT * FROM `tblbooks` b, `tbltransaction` t ,`tblborrower` s
                                                                    WHERE b.IBSN=t.IBSN AND t.BorrowerId=s.BorrowerId"); 
                                                            $cur = $mydb->loadResultlist();
                                                            foreach ($cur as $result) {
                                                                echo '<tr>';  
                                                                echo '<td ><a href="'.web_root.'admin/borrowed/index.php?view=view&id='.$result->TransactionID.'">' . $result->IBSN.'</a></td>';
                                                                echo '<td >'. $result->BookTitle.'</td>'; 
                                                                echo '<td>'. $result->Firstname.' '. $result->Lastname.'</td>';
                                                                echo '<td>'. $result->DateBorrowed.'</td>';
                                                                echo '<td>'. $result->DueDate.'</td>'; 
                                                                echo '<td>'. $result->DateReturned.'</td>';
                                                                echo '<td>'. $result->Remarks.'</td>';  

                                                                 
                                                                echo '</tr>';
                                                            } 
                                                    ?>
                                                  </tbody>
                                                
                                                </table>

                                         
                             
                                            </div>

                                    </div>
                                </div>
                            </div>
                           

                                    </div> 
                       