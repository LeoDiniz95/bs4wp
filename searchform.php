<form role="search" method="get" action="<?php  echo home_url( '/' );  ?>">

    <div class="input-group">

        <input type="search" class="form-control" value="<?php  get_search_query();  ?>" name="s" />

        <div class="input-group-append">

            <button class="btn btn-my-color-2" type="submit">Buscar</button>

        </div>

    </div>

</form>