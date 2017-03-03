
<div id="campo-buscar" class="area-buscar">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-6">
                    <div class="input-group">
                        <input type="search" class="form-control search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default" type="button">Pesquisar</button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->

            </div>
        </div>
    </form>
</div><!-- area-buscar -->
