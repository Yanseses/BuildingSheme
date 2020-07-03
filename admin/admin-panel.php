<?php
/**
 * @package BuildingSheme
 */

add_action('admin_menu', 'tableinfo_admin_menu');

function tableinfo_admin_menu() {
    add_menu_page('BuildingSheme', 'ВuildingSheme', 'manage_options', __FILE__, 'tableinfo_admin', 'dashicons-admin-multisite');
    }


add_action('admin_init', 'build_sheme_admin_init');
add_action('admin_menu', 'build_sheme_admin_menu');
    
    function build_sheme_admin_init()
    {
        wp_register_style('build_sheme_style', WP_PLUGIN_URL . '/Building-sheme/admin/css/admin-style.css');
    }
    
    function build_sheme_admin_menu()
    {
        $page = add_submenu_page( 'admin-panel.php', __('Shema', 'Building-sheme'), __('Shema', 'Building-sheme'), 9,  __FILE__);
   
        add_action('admin_print_styles-' . $page, 'build_sheme_admin_styles');
    }
    
    function build_sheme_admin_styles()
    {
        wp_enqueue_style('build_sheme_style');
    }

function tableinfo_admin() {
    ?>
    <div class="wrap">
        <h1>
            На этой странице можно изменять описание схемы
        </h1>

        <div class="table-info">
            <table class="widefat admin-table">
                <thead>
                    <tr>
                        <td>
                            Номер Офиса
                        </td>
                        <td>
                            Занят ли офис
                        </td>
						<td>
                            Размер офиса (м<sup>2</sup>)
                        </td>
                        <td>
                            Стоимость аренды в год (за м<sup>2</sup>)
                        </td>
                        <td>
                            Общая стоимость аренды за месяц
                        </td>
						<td>
                            Стоимость продажи
                        </td>
						<td>
                            Описание Офиса
                        </td>
                        <td>

                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    global $wpdb;

                    $querysheme = $wpdb->get_results(
                        "
                        SELECT *
                        FROM wp_shema
                        WHERE room_number<150
                        "
                        );
                    ?>
                    <?php 
                    foreach ($querysheme as $querysheme) 
                    {
                    ?>

                    <tr>
                        <?php 
                            echo "<td>".$querysheme->room_number."</td>";
                            echo "<td>".$querysheme->room_status."</td>";
							echo "<td>".$querysheme->room_size."</td>";
                            echo "<td>".$querysheme->room_price_rent."</td>";
							echo "<td>".$querysheme->room_price_rent_mounth."</td>";
                            echo "<td>".$querysheme->room_price_sale."</td>";
                            echo "<td>".$querysheme->room_description."</td>";
                        ?>
                        <td>
                            <button id="js-reduct" class="js-room-edit-button" data-room-number="<?=$querysheme->room_number ?>">Редактировать</button>
                        </td>
                    </tr>

                    <?php  
                    } 
                    ?>
                </tbody>
            </table>

            <table class="widefat admin-table">
                <thead>
                    <tr>
                        <td>
                            Номер Офиса
                        </td>
                        <td>
                            Занят ли офис
                        </td>
						<td>
                            Размер офиса (м<sup>2</sup>)
                        </td>
                        <td>
                            Стоимость аренды в год (за м<sup>2</sup>)
                        </td>
                        <td>
                            Общая стоимость аренды за месяц
                        </td>
						<td>
                            Стоимость продажи
                        </td>
						<td>
                            Описание Офиса
                        </td>
                        <td>

                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    global $wpdb;

                    $querysheme = $wpdb->get_results(
                        "
                        SELECT *
                        FROM wp_shema
                        WHERE room_number<250 and room_number>199
                        "
                        );
                    ?>
                    <?php 
                    foreach ($querysheme as $querysheme) 
                    {
                    ?>

                    <tr>
                        <?php 
                            echo "<td>".$querysheme->room_number."</td>";
                            echo "<td>".$querysheme->room_status."</td>";
						    echo "<td>".$querysheme->room_size."</td>";
                            echo "<td>".$querysheme->room_price_rent."</td>";
							echo "<td>".$querysheme->room_price_rent_mounth."</td>";
                            echo "<td>".$querysheme->room_price_sale."</td>";
							echo "<td>".$querysheme->room_description."</td>";
                        ?>
                        <td>
                            <button class="js-room-edit-button" data-room-number="<?=$querysheme->room_number ?>">Редактировать</button>
                        </td>
                    </tr>

                    <?php  
                    } 
                    ?>
                </tbody>
            </table>

            <table class="widefat admin-table">
                <thead>
                    <tr>
                        <td>
                            Номер Офиса
                        </td>
                        <td>
                            Занят ли офис
                        </td>
						<td>
                            Размер офиса (м<sup>2</sup>)
                        </td>
                        <td>
                            Стоимость аренды в год (за м<sup>2</sup>)
                        </td>
                        <td>
                            Общая стоимость аренды за месяц
                        </td>
						<td>
                            Стоимость продажи
                        </td>
						<td>
                            Описание Офиса
                        </td>
                        <td>

                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    global $wpdb;

                    $querysheme = $wpdb->get_results(
                        "
                        SELECT *
                        FROM wp_shema
                        WHERE room_number<350 and room_number>299
                        "
                        );
                    ?>
                    <?php 
                    foreach ($querysheme as $querysheme) 
                    {
                    ?>

                    <tr>
                        <?php 
                            echo "<td>".$querysheme->room_number."</td>";
                            echo "<td>".$querysheme->room_status."</td>";
							echo "<td>".$querysheme->room_size."</td>";
                            echo "<td>".$querysheme->room_price_rent."</td>";
							echo "<td>".$querysheme->room_price_rent_mounth."</td>";
                            echo "<td>".$querysheme->room_price_sale."</td>";
                            echo "<td>".$querysheme->room_description."</td>";
                        ?>
                        <td>
                            <button class="js-room-edit-button" data-room-number="<?=$querysheme->room_number ?>">Редактировать</button>
                        </td>
                    </tr>

                    <?php  
                    } 
                    ?>
                </tbody>
            </table>

            <table class="widefat admin-table">
                <thead>
                    <tr>
                        <td>
                            Номер Офиса
                        </td>
                        <td>
                            Занят ли офис
                        </td>
						<td>
                            Размер офиса (м<sup>2</sup>)
                        </td>
                        <td>
                            Стоимость аренды в год (за м<sup>2</sup>)
                        </td>
                        <td>
                            Общая стоимость аренды за месяц
                        </td>
						<td>
                            Стоимость продажи
                        </td>
						<td>
                            Описание Офиса
                        </td>
                        <td>

                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    global $wpdb;

                    $querysheme = $wpdb->get_results(
                        "
                        SELECT *
                        FROM wp_shema
                        WHERE room_number<450 and room_number>399
                        "
                        );
                    ?>
                    <?php 
                    foreach ($querysheme as $querysheme) 
                    {
                    ?>

                    <tr>
                        <?php 
                            echo "<td>".$querysheme->room_number."</td>";
                            echo "<td>".$querysheme->room_status."</td>";
							echo "<td>".$querysheme->room_size."</td>";
                            echo "<td>".$querysheme->room_price_rent."</td>";
							echo "<td>".$querysheme->room_price_rent_mounth."</td>";
                            echo "<td>".$querysheme->room_price_sale."</td>";
                            echo "<td>".$querysheme->room_description."</td>";
                        ?>
                        <td>
                            <button class="js-room-edit-button" data-room-number="<?=$querysheme->room_number ?>">Редактировать</button>
                        </td>
                    </tr>

                    <?php  
                    } 
                    ?>
                </tbody>
            </table>

            <table class="widefat admin-table">
                <thead>
                    <tr>
                        <td>
                            Номер Офиса
                        </td>
                        <td>
                            Занят ли офис
                        </td>
						<td>
                            Размер офиса (м<sup>2</sup>)
                        </td>
                        <td>
                            Стоимость аренды в год (за м<sup>2</sup>)
                        </td>
                        <td>
                            Общая стоимость аренды за месяц
                        </td>
						<td>
                            Стоимость продажи
                        </td>
                        <td>
                            Описание Офиса
                        </td>
                        <td>

                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    global $wpdb;

                    $querysheme = $wpdb->get_results(
                        "
                        SELECT *
                        FROM wp_shema
                        WHERE room_number<550 and room_number>499
                        "
                        );
                    ?>
                    <?php 
                    foreach ($querysheme as $querysheme) 
                    {
                    ?>

                    <tr>
                        <?php 
                            echo "<td>".$querysheme->room_number."</td>";
                            echo "<td>".$querysheme->room_status."</td>";
							echo "<td>".$querysheme->room_size."</td>";
                            echo "<td>".$querysheme->room_price_rent."</td>";
							echo "<td>".$querysheme->room_price_rent_mounth."</td>";
                            echo "<td>".$querysheme->room_price_sale."</td>";
                            echo "<td>".$querysheme->room_description."</td>";
                        ?>
                        <td>
                            <button class="js-room-edit-button" data-room-number="<?=$querysheme->room_number ?>">Редактировать</button>
                        </td>
                    </tr>

                    <?php  
                    } 
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <style>
        .edit-room-modal input[type=text],
        .edit-room-modal input[type=number],
        .edit-room-modal textarea,
        .edit-room-modal select {
            width: 100%;
        }
    </style>

    <div class="loader" style="display: none; position: fixed; left:0; right:0; top:0; bottom:0; background: rgba(0,0,0,.6);">
        <div style="position: absolute; top: 50%; left: calc(50% + 40px); transform: translate(-50%,-50%); font-size: 5em; color: white;">
            LOADING...
        </div>
    </div>

    <div class="edit-room-modal" style="display: none; position: fixed; left:0; right:0; top:0; bottom:0; background: rgba(0,0,0,.6);">
    
        <div style="background: #eee; border-radius: 8px; padding: 10px 20px; width: 400px; position: absolute; top: 50%; left: calc(50% + 40px); transform: translate(-50%,-50%);">
            <form id="edit-room-form" method="post">
                <h3>Редактировать комнату</h3>
                <label>Номер комнаты</label>
                <input name="room_number" type="text" value="301" disabled>

                <label>
                    Размер комнаты (м2)
                    <input name="room_size" type="text">
                </label>
                <label>
                    Ставка в год (за м<sup>2</sup>)
                    <input name="room_price_rent" type="text">
                </label>
                <label>
                    Общая стоимость за месяц
                    <input name="room_price_rent_mounth" type="text">
                </label>
				<label>
                    Стоимость продажи
                    <input name="room_price_sale" type="text">
                </label>
                <label>
                    Статус комнаты
                    <select name="room_status">
                        <option value="vacant">Свободна</option>
                        <option value="taken">Занята</option>
                    </select>
                </label>
                <label>
                    Описание комнаты
                    <textarea name="room_description" rows="5"></textarea>
                </label>
                <label>
                    Ссылки на фото (по одной на строку)
                    <textarea name="photos" rows="4"></textarea>
                </label>
                <label>
                    Ссылка на презентацию
                    <input name="presentation_link" type="text">
                </label>
                <p>
                    <button type="submit" class="button button-primary">Сохранить</button>
                    <a href="#" class="button button-secondary js-form-closer">Отмена</a>
                </p>
            </form>
        </div>

    </div>

    <script>
        (() => {
            var $ = jQuery;
            $('.js-room-edit-button').on('click', function(e){
                var room_number = $(this).attr('data-room-number');

                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    data: {
                        action: 'load_cabinet_data',
                        room_number: room_number
                    }, // можно также передать в виде объекта
                    beforeSend: function( xhr ) {
                        $('.loader').show();	
                    },
                    success: function( data ) {
                        
                        data = JSON.parse(data);

                        if(!data || data.error){
                            alert('ERROR #' + data.error + ': ERROR LOADING ROOM')
                        } else {

                            var modal = $('.edit-room-modal');
                            var form = $('#edit-room-form');

                            form.find('input, textarea, select').val(function(index, value) {
                                return data.data[$(this).attr('name')];
                            });

                            modal.show();
                        }

                        $('.loader').hide();
                    }
                });

            });

            $('#edit-room-form').on('submit', function(e){
                e.preventDefault();

                var form_data = $('#edit-room-form').serialize();
                form_data += '&room_number=' + $('#edit-room-form').find('[name=room_number]').val();

                console.log(form_data);

                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    data: 'action=edit_cabinet_data&' + form_data,
                    beforeSend: function( xhr ) {
                        $('.edit-room-modal').hide();
                        $('.loader').show();	
                    },
                    success: function( data ) {
                        if(data == 1){
                            window.location.reload();
                        } else {
                            $('.loader').hide();	
                            alert('SAVE ERROR');
                        }
                    }
                });

            })

            $('.js-form-closer').on('click', e => $('.edit-room-modal').hide());
        })();
    </script>

<?php } 

/*

jQuery.post('/wp-admin/admin-ajax.php',{
    action: 'load_cabinet_data',
    room_number: 302
}, data => console.log(JSON.parse(data)))

*/
?>