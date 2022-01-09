<?php
  
    $controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';
  
    $action     = isset($_GET['action']) ? $_GET['action'] : 'index';
 

    $controller = ucfirst($controller);
    
    $fileController = $controller . "Controller.php";

    $pathController = "controller/$fileController"; 

    if (!file_exists($pathController)) {
        die("Trang bạn tìm không tồn tại"); 
    }

   
    require_once "$pathController";

    $classController = $controller."Controller"; 

    $object = new $classController(); 

    if (!method_exists($object, $action)) {
        die("Phương thức $action không tồn tại trong class $classController"); 
    }
    

    $object->$action();

    Private Sub Command1_Click()
If (Text1.Text <> "" And Text2.Text <> "") Then
Combo1.AddItem Text1.Text
List1.AddItem Text2.Text
Text1.Text = ""
Text2.Text = ""
Else
MsgBox "Ban hay dien day du thong tin", vbOKOnly + vbCritical, "Thong bao"
End If
End Sub


Private Sub Command2_Click()
Dim n As Integer
Dim m As Integer
n = Combo1.ListIndex
m = List1.ListIndex
Combo1.RemoveItem n
List1.RemoveItem m
Combo1.AddItem Text1.Text, n
List1.AddItem Text2.Text, m
Combo1.ListIndex = n
List1.ListIndex = m
End Sub


Private Sub Command3_Click()
Combo1.RemoveItem Combo1.ListIndex
List1.RemoveItem List1.ListIndex
Text1.Text = ""
Text2.Text = ""
Command3.Enabled = False
End Sub


?>