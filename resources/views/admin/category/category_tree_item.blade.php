@if($headCategory->parent_id==0)
    <option style="font-weight: bolder;color: darkgreen" value="{{$headCategory->id}}">{{$headCategory->name}}</option>
@else
    <option value="{{$headCategory->id}}">{{$headCategory->name}}</option>
@endif
@if(isset($categories[$headCategory->id]))
    @include('admin.category.category_tree',['collection'=>$categories[$headCategory->id]])
@endif