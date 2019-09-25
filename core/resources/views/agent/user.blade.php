@extends("agent.master")

@section("content")
    <div class="container" style="margin-top: 30px">
           <div class="row">
               <div class="col-xl-12 col-md-12">
                   <div class="card" >
                       <div class="card-body" style="padding-bottom: 0px">
                           <h4 class="card-title">افزودن کاربر</h4>
                       </div>
                       <div class="card-body">
                           <form method="post" action="{{url("agent/user/add")}}">
                               <div class="row">
                                   <div class="col-sm-4">
                                        <input type="text" name="phone" class="form-control round" placeholder="شماره همراه">
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" name="namayandeh" class="form-control round" placeholder="کد نماینده">
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" name="bazaryab" class="form-control round" placeholder="کد بازاریاب">
                                   </div>
                               </div>
                               <div class="row" style="margin-top: 15px">
                                   <div class="col-sm-4">
                                       <input type="text" name="f_name" class="form-control round" placeholder="نام">
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" name="l_name" class="form-control round" placeholder="نام خانوادگی">
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" name="tell" class="form-control round" placeholder="شماره ثابت">
                                   </div>
                               </div>
                               <div class="row" style="margin-top: 15px">
                                   <div class="col-sm-4">
                                       <input type="text" name="address" class="form-control round" placeholder="آدرس">
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" name="n_code"  class="form-control round" placeholder="شماره ملی">
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" name="bd" class="form-control round" placeholder="تاریخ تولد">
                                   </div>
                               </div>
                               <div class="row" style="margin-top: 15px">
                                   <div class="col-sm-6">
                                       <input type="text" name="cart" class="form-control round" placeholder="شماره کارت بانکی عضو شتاب">
                                   </div>
                                   <div class="col-sm-6">
                                       @csrf
                                       <input class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1" type="submit" value="افزودن">
                                   </div>

                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
    </div>
@endsection

@section("footer")

@endsection