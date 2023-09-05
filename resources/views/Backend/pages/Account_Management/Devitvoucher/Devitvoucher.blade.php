
@extends('Backend.layouts.layouts')

@section('title')
    Devid Voucher
@endsection

@section('main_contain')
    <div class="p-2">
            
      <div class="br-mainpanel p-0">
      <div class="br-pagetitle p-0">
          <div class="br-section-wrapper p-3">
            <div class="">
            <h3 class="text-center ">Create Purchase</h3>
                    
              <div class="text-right">
                  <a href="https://www.reolands.com/managePurchase" class="btn btn-sm btn-info "><i class="fa fa-angle-left"></i></a>
                </div> 
            </div>
                      <form action="https://www.reolands.com/storePurchase" method="POST" enctype="multipart/form-data">
                          <input type="hidden" name="_token" value="p08fGHShStUbl11KNKPASSJEHLRt48C5hUH9OIeq">                    
                          <div class="row no-gutters">
                            <div class="col-md-4 my-2">
                              <label for=""><b>Voucher No# :</b> </label>
                             <input type="text" name="voucher_no" placeholder="e.g. DV0000001" class="form-control" value="">
                          </div>
  
                           <div class="col-md-4 my-2">
                              <label for=""><b>Received Form :</b> </label>
                             <input type="text" name="received_form" class="form-control" value="">
                           </div>
  
                           <div class="col-md-4 my-2">
                              <label for=""><b>Credit hand For Transaction :</b> </label>
                                  <select name="type" id="" class="form-control">
                                      <option value="physical">Asset</option>
                                      <option value="virtual">Liability</option>
                                  </select>
                              </div>
                            <div class="col-md-3 my-2">
                              <label for=""><b>Payment Method :</b> </label>
                             <select name="type" id="payment_method" class="form-control">
                              <option value="bkash">Bkash</option>
                              <option value="rocket">Rocket</option>
                             </select>
                              </div>
                              <div class="col-md-3 my-2">
                                  <label for=""> <b>Order Date :</b> </label>
                                 <input type="date" name="order_date" class="form-control" value="2023-08-08">
                              </div>
                              <div class="col-md-6 my-2">
                                  <label for=""><b>Note :</b> </label>
                                  <textarea name="note" id="" cols="30" rows="1" placeholder="Payment Address" class="form-control"></textarea>
                              </div>       
                    <table class="table table-bordered table-sm">
                    <tbody id="dynamicField">
                      <tr class="dynamicField">
                      
                       
                        
                        <td>
                          <label for=""><b>Account Name :</b></label>
                            <select name="categories[]" id="" class="form-control">
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                                <option value="4">Kazi Arman</option>
                                <option value="5">Amina Khatun</option>
                            </select>
                        </td>
                         <td>
                          <label for=""><b>A/C Code No :</b></label>
                          <input type="number" class="form-control discount" name="discounts[]" onfocusout="discount(event,this)" value="0">
                        </td>
                         <td>
                          <label for=""><b>Amount</b></label>
                          <input type="number" class="form-control total" name="totals[]">
                        </td>
                      <td>
                        <button style="margin-top:35px!important" class="btn btn-sm btn-success mt-4" id="addNewField"><i class="fa fa-plus"></i></button>
                      </td>
                    </tr>
              
                    </tbody>
                    
                   </table>	                
                           
                </div>
                         
                          <center>
                          <div class="col-md-12 text-center">
                              <button type="submit" class="btn btn-info">Submit</button>
                              <a href="https://www.reolands.com/managePurchase" class="btn  btn-danger">Cancel</a>
                          </div>
                          </center>
                      </form>
              <!-- </div> -->
      
          </div>
      </div>
              </div>
      
 
      
      <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
      
      <script>
          $(document).ready(function(){
              $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
              });
          });
          ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"></script>
      <script>
            
      </script>
          <script>
            const log = (el) => console.log(el);
      
            $('body').on('click','#addNewField',function(e){
              e.preventDefault();
      
              let html = `<tr>
                      
                       
                <td>
                      <label for=""><b>Account Name :</b></label>
                        <select name="categories[]" id="" class="form-control">
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">Kazi Arman</option>
                            <option value="5">Amina Khatun</option>
                        </select>
                    </td>
                     <td>
                      <label for=""><b>A/C Code No :</b></label>
                      <input type="number" class="form-control discount" name="discounts[]" onfocusout="discount(event,this)" value="0">
                    </td>
                     <td>
                      <label for=""><b>Amount</b></label>
                      <input type="number" class="form-control total" name="totals[]" readonly="">
                    </td>
                       
                      
                      <td>
                        <button style="margin-top:35px!important" class="btn btn-sm btn-danger mt-4 deleteRow"><i class="fa fa-trash" ></i></button>
                      </td>
                    </tr>
              `;
               $('.dynamicField').after(html);
            });
      
            $('body').on('click',".deleteRow",function(e){
              e.preventDefault();
              $(this).parents("tr").remove();
          });
            
          </script>
      
          
      
      </div>
@endsection
