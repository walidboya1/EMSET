Imports MySql.Data.MySqlClient
Imports Microsoft.VisualBasic
Public Class ajou_ad
    Sub CLS()
        Nom.Text = ""
        prenom.Text = ""
        tel.Text = ""
        cin.Text = ""
        filiere.Text = ""
        Inscription.Text = ""
        bourse.Text = ""
        fodate.Text = ""
    End Sub
    Private Sub Ajouter_Click(sender As Object, e As EventArgs) Handles Ajouter.Click
        If Nom.Text = "" Or prenom.Text = "" Or tel.Text = "" Or cin.Text = "" Or filiere.Text = "" Or bourse.Text = "" Or Inscription.Text = "" Or fodate.Text = "" Then
            MsgBox("Remplissez tous les champs, s'il vous plaît", MsgBoxStyle.Critical)
        Else
            Dim UserRec = Inscription.Text
            Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
            Dim Reader As MySqlDataReader
            Dim COMMAND As New MySqlCommand
            Try
                MySqlConnection.Open()
                Dim query As String
                query = "SELECT * FROM emset.stagiaire WHERE inscription='" & UserRec & "'"
                COMMAND = New MySqlCommand(query, MySqlConnection)
                Reader = COMMAND.ExecuteReader
                While Reader.Read
                    erreur.Text = Reader.GetString("inscription")
                End While
                MySqlConnection.Close()
            Catch ex As Exception
                MessageBox.Show(ex.Message)
            End Try
            MySqlConnection.Dispose()
            If erreur.Text = UserRec Then
                MsgBox("Ce numero d'inscription " & UserRec & " existe")
                erreur.Text = "Ce numero d'inscription " & UserRec & " existe"
                erreur.Visible = False
            Else
                erreur.Visible = False
                Dim MYConnectionsql As New MySqlConnection
                Dim CMD As New MySqlCommand
                Dim CMD1 As New MySqlCommand
                MYConnectionsql.ConnectionString = "server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset"
                MYConnectionsql.Open()
                CMD.Connection = MYConnectionsql
                CMD.CommandText = "INSERT INTO stagiaire (inscription,filiere,duree,nom,prenom,cin,bourse,date,user,observation,TEL) VALUES('" & Inscription.Text & "','" & filiere.Text & "','" & fodate.Text & "','" & Nom.Text & "','" & prenom.Text & "','" & cin.Text & "','" & bourse.Text & "','" & DateTimePicker1.Text & "','" & user.Text & "','" & Observation.Text & "','" & tel.Text & "')"
                CMD.ExecuteNonQuery()
                CMD1.Connection = MYConnectionsql
                CMD1.CommandText = "INSERT INTO payement (inscription,recu,date,montant,observation,user,cin,filiere,nom,prenom,TEL) VALUES('" & Inscription.Text & "','0','" & DateTimePicker1.Text & "','0','" & Observation.Text & "','" & user.Text & "','" & cin.Text & "','" & filiere.Text & "','" & Nom.Text & "','" & prenom.Text & "','" & tel.Text & "')"
                CMD1.ExecuteNonQuery()
                MsgBox("Complete")
                CLS()
            End If
        End If
    End Sub

    Private Sub Annuler_Click(sender As Object, e As EventArgs) Handles Annuler.Click
        inter_ad.user.Text = user.Text
        inter_ad.Show()
        Me.Close()
    End Sub
End Class