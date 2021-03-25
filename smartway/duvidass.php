<?php
    $os_email = $_SESSION['u_email'];
    $sql = mysqli_query($link, "SELECT cid, c_nome, c_telefone, c_email, c_menssagem  FROM smartway.contato") or die("Erro");
    while($dados=mysqli_fetch_assoc($sql)){
?>
    <tr>
        <td class="pt-3-half" contenteditable="true"><?php echo $dados ['cid']        ?></td>
        <td class="pt-3-half" contenteditable="true"><?php echo $dados ['c_nome']     ?></td>
        <td class="pt-3-half" contenteditable="true"><?php echo $dados ['c_telefone']    ?></td>
        <td class="pt-3-half" contenteditable="true"><?php echo $dados ['c_email']    ?></td>
        <td class="pt-3-half" contenteditable="true"><?php echo $dados ['c_menssagem']    ?></td>
    </tr>
<?php } ?>    
