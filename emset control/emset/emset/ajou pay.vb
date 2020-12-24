Imports MySql.Data.MySqlClient

Public Class ajou_pay
    Sub act()
        Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
        Dim MysqlAdapter As New MySqlDataAdapter
        Dim DatabaseSet As New DataTable
        Dim Source As New BindingSource
        Try
            MySqlConnection.Open()
            Dim Query As String
            Query = "SELECT nom,prenom,filiere,cin,observation,inscription,montant,date FROM emset.payement WHERE cin ='" & cin.Text & "'"
            Dim Command As New MySqlCommand
            Command = New MySqlCommand(Query, MySqlConnection)
            MysqlAdapter.SelectCommand = Command
            MysqlAdapter.Fill(DatabaseSet)
            DataGridView1.DataSource = DatabaseSet
            MysqlAdapter.Update(DatabaseSet)

            MySqlConnection.Close()
        Catch ex As Exception
            MessageBox.Show(ex.Message)
        Finally
            MySqlConnection.Dispose()
        End Try
    End Sub
    Sub act2()
        Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
        Dim MysqlAdapter As New MySqlDataAdapter
        Dim DatabaseSet As New DataTable
        Dim Source As New BindingSource
        Try
            MySqlConnection.Open()
            Dim Query As String
            Query = "SELECT nom,prenom,filiere,cin,observation,inscription,montant,date FROM emset.payement WHERE inscription ='" & Inscription.Text & "'"
            Dim Command As New MySqlCommand
            Command = New MySqlCommand(Query, MySqlConnection)
            MysqlAdapter.SelectCommand = Command
            MysqlAdapter.Fill(DatabaseSet)
            DataGridView1.DataSource = DatabaseSet
            MysqlAdapter.Update(DatabaseSet)

            MySqlConnection.Close()
        Catch ex As Exception
            MessageBox.Show(ex.Message)
        Finally
            MySqlConnection.Dispose()
        End Try
    End Sub

    Private Sub DataGridView1_CellContentClick(sender As Object, e As DataGridViewCellEventArgs) Handles DataGridView1.CellContentClick
        If e.RowIndex >= 0 Then
            Dim row As DataGridViewRow
            row = Me.DataGridView1.Rows(e.RowIndex)
            nom.Text = row.Cells("nom").Value.ToString
            Prenom.Text = row.Cells("prenom").Value.ToString
            Observation.Text = row.Cells("Observation").Value.ToString
            filiere.Text = row.Cells("filiere").Value.ToString
            cin.Text = row.Cells("cin").Value.ToString
            Inscription.Text = row.Cells("Inscription").Value.ToString
        End If
    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Rechercher.Click
        act()
    End Sub

    Private Sub Ajouter_Click(sender As Object, e As EventArgs) Handles Ajouter.Click
        If nom.Text = "" Or Inscription.Text = "" Or cin.Text = "" Or filiere.Text = "" Or montant.Text = "" Or recu.Text = "" Then
            MsgBox("Remplissez tous les champs, s'il vous plaît", MsgBoxStyle.Critical)
        Else
            Dim UserRec = recu.Text
            Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
            Dim Reader As MySqlDataReader
            Dim COMMAND As New MySqlCommand
            Try
                MySqlConnection.Open()
                Dim query As String
                query = "SELECT * FROM emset.payement WHERE recu='" & UserRec & "'"
                COMMAND = New MySqlCommand(query, MySqlConnection)
                Reader = COMMAND.ExecuteReader
                While Reader.Read
                    erreur.Text = Reader.GetString("recu")
                End While
                MySqlConnection.Close()
            Catch ex As Exception
                MessageBox.Show(ex.Message)
            End Try
            MySqlConnection.Dispose()
            If erreur.Text = UserRec Then
                MsgBox("Ce recu ' " & UserRec & " ' existe", MsgBoxStyle.Exclamation)
                erreur.Visible = False
            Else
                erreur.Visible = False
                Dim MYConnectionsql As New MySqlConnection
                Dim CMD1 As New MySqlCommand
                MYConnectionsql.ConnectionString = "server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset"
                MYConnectionsql.Open()
                CMD1.Connection = MYConnectionsql
                CMD1.CommandText = "INSERT INTO payement (inscription,filiere,nom,prenom,cin,observation,montant,recu,date,user,TEL) VALUES('" & Inscription.Text & "','" & filiere.Text & "','" & nom.Text & "','" & Prenom.Text & "','" & cin.Text & "','" & Observation.Text & "','" & montant.Text & "','" & recu.Text & "','" & DateTimePicker1.Text & "','" & user.Text & "','0')"
                CMD1.ExecuteNonQuery()
                MsgBox("Complete")
            End If
        End If

        act()
    End Sub

    Private Sub Annuler_Click(sender As Object, e As EventArgs) Handles Annuler.Click
        Payement.admin.Text = admin.Text
        Payement.user.Text = user.Text
        Payement.Show()
        Me.Close()
    End Sub

    Private Sub cin_KeyPress(sender As Object, e As KeyPressEventArgs) Handles cin.KeyPress
        If Asc(e.KeyChar) = 13 Then
            act()
        End If

    End Sub
    Private Sub Inscription_KeyPress(sender As Object, e As KeyPressEventArgs) Handles Inscription.KeyPress
        If Asc(e.KeyChar) = 13 Then
            act2()
        End If

    End Sub

    Private Sub Rechercher2_Click(sender As Object, e As EventArgs) Handles Rechercher2.Click
        act2()
    End Sub
End Class