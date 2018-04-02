<!DOCTYPE html>
<html lang="it">
<?php
    require_once('head.html');
?>
<body>

<section class="cover cover--login">
    <div class="cover__filter"></div>
    <div class="cover__caption">
        <div class="cover__caption__copy">
            <h1>Geolocalizzazione</h1>
            <h2></h2>
        </div>
    </div>
</section>

<div class="login">
    <div class="login__copy">
      <form  method="POST" action="conversione.php">
              <div class="login__copy__group">
                  <input class="login__copy__group__input" type="text" name="latitudine" value= "" required>
                      <label class="login__copy__group__label">Latitudine</label>
              </div>
              <div class="login__copy__group">
                    <input class="login__copy__group__input" type="text" name="longitudine" value= "" required>
                    <label class="login__copy__group__label">Longitudine</label>
              </div>
              <br><br>
              <button class="login__copy__button" type="submit"> INVIO </button>
              <br><br>
      </form>
     </div>
</div>

<?php
    require_once('footer.php');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        $(".header__icon-bar").click(function(e){

            $(".header__menu").toggleClass('is-open');{}
            e.preventDefault();
        });

    });
</script>

</body>
</html>
