<form method="post" action="{{route('diet.store')}}" enctype="multipart/form-data">
    @csrf
    <input type="text" value="" name="name" placeholder="name">
    <input type="number" value="" name="price" placeholder="price">
    <input type="text" value="" name="desc" placeholder="desc">
    <input type="text" value="" name="qty" placeholder="qty">
    <input type="file" value="" name="diet_image">
    <input type="submit" value="add" >
</form>
