<?php
/**
 * Created by PhpStorm.
 * User: Computer of Linh
 * Date: 4/13/2019
 * Time: 10:57 PM
 */

function maracanh()
{?>
    <table >
        <tr>
            <td width="200px"><input type="button" id="myCheck"  onclick="tocden()" value="tóc đen">
                </br></br>
                <input type="button" id="myCheck"  onclick="tocvang()" value="tóc vàng">
                </br></br>
                <input type="button" id="myCheck"  onclick="vaytim()" value="váy tím">
                </br></br>
                <input type="button" id="myCheck"  onclick="vayxanh()" value="váy xanh">
            </td>
            <td>
                <div class="manocanh" >
                    <canvas id="viewport" width="100px" height="87px"></canvas>
                    <canvas id="vay" width="120px" height="229px" ></canvas>
                </div>

            </td>
        </tr>
    </table>
<?php }

add_shortcode( 'maracanh', 'maracanh'  );


// short code maracanh
//add_shortcode( 'maracanh', 'maracanh_func');
function maracanh_func($post_id)
{
    echo $post_id;
}
