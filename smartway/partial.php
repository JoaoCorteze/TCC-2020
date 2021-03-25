<?php
    $os_email = $_SESSION['u_email'];
    $sql = mysqli_query($link, "SELECT fid, f_nome, f_email, f_senha FROM smartway.funcionario") or die("Erro");
    while($dados=mysqli_fetch_assoc($sql)){
?>
    <tr>
        <td class="pt-3-half" contenteditable="true"><?php echo $dados ['fid']        ?></td>
        <td class="pt-3-half" contenteditable="true"><?php echo $dados ['f_nome']     ?></td>
        <td class="pt-3-half" contenteditable="true"><?php echo $dados ['f_email']    ?></td>
        <td class="pt-3-half" contenteditable="true"><?php echo $dados ['f_senha']    ?></td>
    </tr>
<?php } ?>    