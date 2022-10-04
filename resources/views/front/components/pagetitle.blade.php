 <!-- ========== PAGE TITLE ========== -->
 <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
 background-size: cover;">
     <div class="container">
       <div class="inner">
         <h1>{{Route::current()->getName()}}</h1>
         <ol class="breadcrumb">
           <li>
             <a href="{{url('/')}}">Home</a>
           </li>
           <li>{{Route::current()->getName()}}</li>
         </ol>
       </div>
     </div>
   </div>
