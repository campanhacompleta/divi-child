<?php

/*
 * O loop padrão do archive.php
 *
 * Por enquanto, ele está apenas alinhado para funcionar com o Delibera. A ideia é deixa-lo específico
 * o suficiente pra trabalhar com datas, categorias, tags e até taxonomias, antes de, quem sabe, separar
 * os arquivos.
 *
 */

?>
<div class="et_pb_section  et_pb_section_0 et_section_regular">

<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
	$status_pauta = delibera_get_situacao($post->ID)->slug;
?>
    <div class="et_pb_column et_pb_column_1_4  et_pb_column_0">
        <div class="et_pb_row et_pb_row_0 et_pb_row_4col">
        <div class="et_pb_module et_pb_delibera_member  et_pb_team_pauta22v_0 et_pb_bg_layout_light clearfix">
            <div class="et_pb_delibera_member_image et-waypoint et_pb_animation_off et-animated">
            </div>
            <div class="et_pb_delibera_member_description">
                <div class="temaVerde" id="tema"></div>
                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                </a></div>
            <br><div class="tags" id="tags">
                <?php echo get_the_tag_list('Tags: ',', ','')?>
            </div>

            <br><div class="user" id="user">
                <div class="imageInterna"><?php echo get_avatar( get_the_author_meta( 'ID' ), 25 ); ?></div>
                <div class="name"><?=get_the_author()?></div>
            </div>
            <div id="like" class="like"><img src="http://acidadequeeuquero.beta.campanhacompleta.com.br/files/2016/04/up.png">01</div>
            <div id="deslike" class="deslike"><img src="http://acidadequeeuquero.beta.campanhacompleta.com.br/files/2016/04/down.png">01</div>
            <div id="faixa" class="coment"><img src="http://acidadequeeuquero.beta.campanhacompleta.com.br/files/2016/04/com.png">01</div>

            <div id="faixa" class="faixaVerde"><img src="http://acidadequeeuquero.beta.campanhacompleta.com.br/files/2016/04/opn-green.png"></div>

        </div>
        </div>
    </div>

		<?php comments_template( '', true ); ?>

<?php endwhile; endif; ?>
</div>
