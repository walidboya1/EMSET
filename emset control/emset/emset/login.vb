Imports MySql.Data.MySqlClient
Public Class login
    Sub LOGIN()

        Dim ConnectionSQL As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
        Dim COMMAND As New MySqlCommand
        Dim Reader As MySqlDataReader

        If Username.Text = "" Or Password.Text = "" Then
                MsgBox("Merci de remplir tous les champs", MsgBoxStyle.Critical)
            Else
                Try
                    ConnectionSQL.Open()
                    COMMAND.Connection = ConnectionSQL


                    COMMAND.CommandText = "SELECT user,password,admin FROM emset.login WHERE user='" & Username.Text & "'and password='" & Password.Text & "'"
                    Reader = COMMAND.ExecuteReader
                    While Reader.Read
                        Label3.Text = Reader.GetString("admin")
                    End While
                    If Reader.HasRows Then
                        If Label3.Text = "non" Then
                            Timer1.Start()
                        ElseIf Label3.Text = "oui" Then
                            Timer2.Start()
                        End If

                    Else
                        MsgBox("Le nom d'utilisateur ou mot de passe est incorrecte")
                    End If
                Catch ex As Exception
                    MsgBox("Il n'existe aucune connection", MsgBoxStyle.Exclamation)
                End Try
            End If

    End Sub
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        LOGIN()
    End Sub

    Private Sub Timer1_Tick(sender As Object, e As EventArgs) Handles Timer1.Tick
        ajou.user.Text = Username.Text
        modif.user.Text = Username.Text
        inter.user.Text = Username.Text
        inter.Show()
        Me.Close()
    End Sub

    Private Sub Timer2_Tick(sender As Object, e As EventArgs) Handles Timer2.Tick
        inter_ad.user.Text = Username.Text
        ajou_ad.user.Text = Username.Text
        modif_ad.user.Text = Username.Text
        ajou_pay.user.Text = Username.Text
        modif_pay.user.Text = Username.Text
        inter_ad.Show()
        Me.Close()
    End Sub

    Private Sub Password_KeyPress(sender As Object, e As KeyPressEventArgs) Handles Password.KeyPress
        If Asc(e.KeyChar) = 13 Then
            LOGIN()
        End If

    End Sub
End Class
