Imports MySql.Data.MySqlClient

Public Class Form1
    Sub act()
        Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
        Dim MysqlAdapter As New MySqlDataAdapter
        Dim DatabaseSet As New DataTable
        Dim Source As New BindingSource
        Try
            MySqlConnection.Open()
            Dim Query As String
            Query = "SELECT * FROM emset.login"
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
    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        act()
    End Sub

    Private Sub Ajoute_Click(sender As Object, e As EventArgs) Handles ajoute.Click
        If User.Text = "" Or password.Text = "" Or admin.Text = "" Then
            MsgBox("Complete all Please complete all fields", MsgBoxStyle.Critical)
        Else
            Dim UserRec = User.Text
            Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
            Dim Reader As MySqlDataReader
            Dim COMMAND As New MySqlCommand
            Try
                MySqlConnection.Open()
                Dim query As String
                query = "SELECT * FROM emset.login WHERE user='" & UserRec & "'"
                COMMAND = New MySqlCommand(query, MySqlConnection)
                Reader = COMMAND.ExecuteReader
                While Reader.Read
                    Erreur.Text = Reader.GetString("User")
                End While
                MySqlConnection.Close()
            Catch ex As Exception
                MessageBox.Show(ex.Message)
            End Try
            MySqlConnection.Dispose()
            If Erreur.Text = UserRec Then
                MsgBox("This accounte " & UserRec & " is all ready existe")
                Erreur.Text = "This accounte " & UserRec & " is all ready existe"
                Erreur.Visible = False
            Else
                Erreur.Visible = False
                Dim MYConnectionsql As New MySqlConnection
                Dim CMD As New MySqlCommand
                MYConnectionsql.ConnectionString = "server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset"
                MYConnectionsql.Open()
                CMD.Connection = MYConnectionsql
                CMD.CommandText = "INSERT INTO login (user,password,admin) VALUES('" & User.Text & "','" & password.Text & "','" & admin.Text & "')"
                CMD.ExecuteNonQuery()
                MsgBox("Complete")
            End If
        End If

        act()


    End Sub

    Private Sub DataGridView1_CellContentClick(sender As Object, e As DataGridViewCellEventArgs) Handles DataGridView1.CellContentClick
        If e.RowIndex >= 0 Then
            Dim row As DataGridViewRow
            row = Me.DataGridView1.Rows(e.RowIndex)
            IDCompte.Text = row.Cells("id").Value.ToString
            User.Text = row.Cells("user").Value.ToString
            password.Text = row.Cells("password").Value.ToString
            admin.Text = row.Cells("admin").Value.ToString
        End If
    End Sub

    Private Sub Modif_Click(sender As Object, e As EventArgs) Handles modif.Click
        If User.Text = "" Or password.Text = "" Or admin.Text = "" Then
            MsgBox("Complete all Please complete all fields", MsgBoxStyle.Critical)
        Else
            Dim UserRec = User.Text
            Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
            Dim Reader As MySqlDataReader
            Dim COMMAND As New MySqlCommand
            Try
                MySqlConnection.Open()
                Dim Query As String
                Query = "UPDATE emset.login SET user='" & User.Text & "',password='" & password.Text & "',admin='" & admin.Text & "'WHERE id='" & IDCompte.Text & "'"
                COMMAND = New MySqlCommand(Query, MySqlConnection)
                Reader = COMMAND.ExecuteReader
                MsgBox("the account information have been changed")
                MySqlConnection.Close()
            Catch ex As Exception
                MessageBox.Show(ex.Message)
            Finally
                MySqlConnection.Dispose()
            End Try
        End If

        act()
    End Sub

    Private Sub Supp_Click(sender As Object, e As EventArgs) Handles supp.Click
        Dim MySQLConnection As New MySqlConnection
        MySQLConnection.ConnectionString = "server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset"
        Try
            MySQLConnection.Open()
            Dim Query As String
            Query = "DELETE  FROM emset.login WHERE user='" & User.Text & "'"
            Dim Command As New MySqlCommand
            Dim Reader As MySqlDataReader
            Command = New MySqlCommand(Query, MySQLConnection)
            Reader = Command.ExecuteReader
            MsgBox("Compte suprimer avec succès")
            MySQLConnection.Close()
        Catch ex As Exception
            MessageBox.Show(ex.Message)
        Finally
            MySQLConnection.Dispose()
        End Try

        act()
    End Sub
End Class
