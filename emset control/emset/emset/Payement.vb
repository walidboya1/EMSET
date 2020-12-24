Imports MySql.Data.MySqlClient
Public Class Payement
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        ajou_pay.user.Text = user.Text
        ajou_pay.admin.Text = admin.Text
        ajou_pay.Show()
        Me.Close()
    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        modif_pay.user.Text = user.Text
        modif_pay.admin.Text = admin.Text
        modif_pay.Show()
        Me.Close()
    End Sub

    Private Sub Button3_Click(sender As Object, e As EventArgs) Handles Button3.Click
        If admin.Text = "yes" Then
            inter_ad.user.Text = user.Text
            inter_ad.Show()
            Me.Close()
        Else
            inter.user.Text = user.Text
            inter.Show()
            Me.Close()
        End If

    End Sub
End Class