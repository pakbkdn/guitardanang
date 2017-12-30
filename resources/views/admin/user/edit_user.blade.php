@extends('admin.master-admin')
@section('content')
    <div class="box-body">
        <h1>Phân Quyền User</h1>
       <form role="form" action="{{url('ad-guitardn/manage_user/editusers')}}/{{$user->id}}" method="post" id="form">
          {!!csrf_field()!!}
           <div class="form-group">
              <label for="user-name">Tên người dùng</label>
              <input type="text" name="user-name" class="form-control" id="user-name" value="{{$user->username}}" disabled>
           </div>
            <div class="form-group">
                <label for="Roles">Quyền hạn</label>
                <select name="roles" id="roles" class="form-control">
                   <option value="0" @if(($user->roles)==0) selected @endif>User</option>
                   <option  value="1" @if(($user->roles)==1) selected @endif>Admin</option>
                </select>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}" disabled>
           </div>

           <div class="box-footer">
               <button type="submit" name="add" class="btn btn-primary click">Lưu</button>
           </div>
       </form>
   </div>
@stop
