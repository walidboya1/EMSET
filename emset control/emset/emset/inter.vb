Imports MySql.Data.MySqlClient
Public Class inter
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        ajou.user.Text = user.Text
        ajou.admin.Text = "no"
        ajou.Show()
        Me.Close()
    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        modif.user.Text = user.Text
        modif.admin.Text = "no"
        modif.Show()
        Me.Close()
    End Sub
    Private Sub Button3_Click(sender As Object, e As EventArgs) Handles Button3.Click
        login.Show()
        Me.Close()
    End Sub

    Private Sub Button4_Click(sender As Object, e As EventArgs) Handles Button4.Click
        Payement.user.Text = user.Text
        Payement.admin.Text = "no"
        Payement.Show()
        Me.Close()
    End Sub
End Class