<?php
   define('allow', true);
   include_once('includes.php');
   include('header.php'); 
   ?>
<!-- start page title -->
<div class="row">
   <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
         <h4 class="mb-sm-0 font-size-18">Hash generator</h4>
      </div>
   </div>
</div>
<!-- end page title -->
<?php include('ads_upper.php'); ?>
<div class="row">
   <div class="col-xl-6">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title mb-4">Hash generator</h4>
            <form id="hashgen" name="hashgen">
            <div class="mb-3">
                <label for="string" class="form-label">String</label>  
                <input class="form-control" name="string" placeholder="MyStrongPassword" />
            </div>
               <div class="mb-3">
                  <label for="hash" class="form-label">Hash type</label>
                  <select name="hash" class="form-control">
                        <option value="0" selected>Select one</option>
                        <option value="1">md2</option>
                        <option value="2">md4</option>
                        <option value="3">md5</option>
                        <option value="4">sha1</option>
                        <option value="5">sha224</option>
                        <option value="6">sha256</option>
                        <option value="7">sha384</option>
                        <option value="8">sha512</option>
                        <option value="9">ripemd128</option>
                        <option value="10">ripemd160</option>
                        <option value="11">ripemd256</option>
                        <option value="12">ripemd320</option>
                        <option value="13">whirlpool</option>
                        <option value="14">tiger128,3</option>
                        <option value="15">tiger160,3</option>
                        <option value="16">tiger192,3</option>
                        <option value="17">tiger128,4</option>
                        <option value="18">tiger160,4</option>
                        <option value="19">tiger192,4</option>
                        <option value="20">snefru</option>
                        <option value="21">snefru256</option>
                        <option value="22">gost</option>
                        <option value="23">gost-crypto</option>
                        <option value="24">adler32</option>
                        <option value="25">crc32</option>
                        <option value="26">crc32b</option>
                        <option value="27">fnv132</option>
                        <option value="28">fnv1a32</option>
                        <option value="29">fnv164</option>
                        <option value="30">fnv1a64</option>
                        <option value="31">joaat</option>
                        <option value="32">haval128,3</option>
                        <option value="33">haval160,3</option>
                        <option value="34">haval192,3</option>
                        <option value="35">haval224,3</option>
                        <option value="36">haval256,3</option>
                        <option value="37">haval128,4</option>
                        <option value="38">haval160,4</option>
                        <option value="39">haval192,4</option>
                        <option value="40">haval224,4</option>
                        <option value="41">haval256,4</option>
                        <option value="42">haval128,5</option>
                        <option value="43">haval160,5</option>
                        <option value="44">haval192,5</option>
                        <option value="45">haval224,5</option>
                        <option value="46">haval256,5</option>
                  </select>
               </div>
               <div id="resultdiv" class="mb-3" style="display:none;">
                  <label for="result" class="form-label">Hashed string</label>
                  <input type="text" class="form-control" disabled id="result">
               </div>
               <div>
                  <button type="button" onclick="HashGen();" class="btn btn-primary w-md">Generate</button>
               </div>
               <input type="hidden" name="_csrf" value="<?php echo $token; ?>" />
            </form>
         </div>
         <!-- end card body -->
      </div>
      <!-- end card -->
   </div>
</div>
<?php include('footer.php'); ?>