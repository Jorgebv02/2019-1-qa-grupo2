
      <div class="feed-content">
    <div class="recentcontainer">
        <ul class="newpostheader nav nav-tabs nav-justified">
            <li>
                <a href="javascript:void(0)">
          <i class="fa fa-pencil"></i>
          <span>Crear un Post</span>
        </a>
            </li>
        </ul>
        <div class="newpost">
            <textarea placeholder="En que estas pensando..."></textarea>
        </div>
        <table class="table newpostfooter">
            <tr>
                <td style="width: 85%;">
                    <input class="input-tags" name="tags"  id="input-tags" placeholder="TAGS" >
                </td>
                <td style="width: 15%;">
                    <select class="form-control" style="height: 35px;">
                        <option value="1">Público</option>
                        <option value="1">Privado</option>
                    </select>
                </td>
                <td style="width: 15%;">
                    <center>
                        <a href="#" class="btn btn-success" style="height: 35px;">Publicar</a>
                    </center>
                </td>
            </tr>
        </table>
    </div>
          
          

           <?php for($x=0;$x<10;$x++){ ?>
    <div class="recentcontainer">
        <div class="newpostheader">
        <a href="javascript:void(0)"><img src="//i.imgur.com/5jInimY.jpg" /><span class="name">Jose Ceciliano</span></a>
            <p><a class="date" href="#">44 mins</a> <i class="fa fa-globe"></i></p>
        </div>
        <div class="newpost">
            <div class="postcontent">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate sunt quasi in quam asperiores! Optio voluptate impedit eos ex nisi, molestias facilis sint cupiditate, dolores veritatis cum? Enim vel, qui!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate sunt quasi in quam asperiores! Optio voluptate impedit eos ex nisi, molestias facilis sint cupiditate, dolores veritatis cum? Enim vel, qui!
            </div>
        </div>
        <ul class="newpostfooter nav nav-tabs nav-justified">
            <table style='width: 100%;'>
                <tr>
                    <td> 
                        <center>(0) <i class="fa fa-thumbs-up" style="color:#3B5998;"></i></center>
                        
                    </td>
                    <td> 
                        <center>(0) <i class="fa fa-comments" style="color:#FF0000;"></i></center>
                        
                    </td>
                </tr>
            </table>
        </ul>
        <ul class="newpostfooter nav nav-tabs nav-justified">
            <li>
                <a href="#"><i class="fa fa-thumbs-up"></i><span>Like</span></a> 
            </li>
            <li>
                <a href="#" title="Leave a comment"><i class="fa fa-comment-o"></i><span>Comentar</span></a>
            </li>
        </ul>
        <div class="commentpost">
            <div class="input-group">
                <a href="#"><img src="//i.imgur.com/5jInimY.jpg"  style='margin-top: 40%;margin-left: 10%;'/></a>
                <table style="width: 88%;">
                    <tr>
                        <td><textarea class="form-control" placeholder="Write a comment..." style="width: 100%; height: 60px;"></textarea></td>
                    </tr>
                    <tr>
                        <td><input class=" input-tags"  id="input-tags" name="tags" placeholder="TAGS" style="width: 100%;"></td>
                    </tr>
                </table>
              
               
            </div>
        </div>
    </div> 
           <?php } ?>
          
          
          
</div>


<div class="right-content">
    <div class="section-content">
     <h2>
      Personas<br>
    </h2>
    <ul>
        <?php for($x=0;$x<10;$x++){ ?>
        <li>
            <a href="javascript:void(0)">
                <img src="https://i.imgur.com/5jInimY.jpg" align="left"> <b>Silvia Calderon</b>
                <a href="#" class="btn btn-info" style='right: 10px;position: inherit;' >Hacer Amigos</a>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
                <b>Ana Rojas</b><a href="#" class="btn btn-danger" style='left: 12%;position: relative;' >Eliminar Amigo</a>
            </a>
        </li>
        <?php } ?>
    </ul>
    </div>
</div>




<div class="left-content">
    <div class="section-content">
     <h2>
      Actividad<br>
    </h2>
    <ul>
        <?php for($x=0;$x<10;$x++){ ?>
        <li>
            <a href="javascript:void(0)">
                <img src="https://i.imgur.com/5jInimY.jpg" align="left"> <b>Silvia Calderon</b>
            </a>
            <span>Publico hace 40min</span>
        </li>
        <li>
            <a href="javascript:void(0)">
                <img src="https://i.imgur.com/5jInimY.jpg" align="left"> <b>Ana Rojas</b>
            </a>
            <span>Comento hace 40min</span>
        </li>
        
        <?php } ?>
    </ul>
    </div>
</div>
