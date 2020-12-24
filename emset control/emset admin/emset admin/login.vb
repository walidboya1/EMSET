Public Class login
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        If TextBox1.Text = "amina2003" Then
            Form1.Show()
            Me.Close()
        Else
            MsgBox("mots de pass incorrect", MsgBoxStyle.Critical)
            TextBox1.Text = ""
        End If
    End Sub

    Private Sub TextBox1_KeyPress(sender As Object, e As KeyPressEventArgs) Handles TextBox1.KeyPress
        If Asc(e.KeyChar()) = "13" And TextBox1.Text = "amina2003" Then
            Form1.Show()
            Me.Close()
        ElseIf Asc(e.KeyChar()) = "13" And TextBox1.Text <> "amina2003" Then
            MsgBox("mots de pass incorrect", MsgBoxStyle.Critical)
            TextBox1.Text = ""
        End If
    End Sub
End Class