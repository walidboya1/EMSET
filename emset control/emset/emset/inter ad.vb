Imports MySql.Data.MySqlClient
Public Class inter_ad
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        ajou_ad.user.Text = user.Text
        ajou_ad.admin.Text = "yes"
        ajou_ad.Show()
        Me.Close()
    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        modif_ad.user.Text = user.Text
        modif_ad.admin.Text = "yes"
        modif_ad.Show()
        Me.Close()
    End Sub

    Private Sub Button4_Click(sender As Object, e As EventArgs) Handles Button4.Click
        Payement.user.Text = user.Text
        Payement.admin.Text = "yes"
        Payement.Show()
        Me.Close()
    End Sub

    Private Sub Button3_Click(sender As Object, e As EventArgs) Handles Button3.Click
        login.Show()
        Me.Close()
    End Sub
End Class