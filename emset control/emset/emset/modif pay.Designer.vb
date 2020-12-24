<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class modif_pay
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(modif_pay))
        Me.DataGridView1 = New System.Windows.Forms.DataGridView()
        Me.Modifier = New System.Windows.Forms.Button()
        Me.Annuler = New System.Windows.Forms.Button()
        Me.filiere = New System.Windows.Forms.ComboBox()
        Me.DateTimePicker1 = New System.Windows.Forms.DateTimePicker()
        Me.Label8 = New System.Windows.Forms.Label()
        Me.Label6 = New System.Windows.Forms.Label()
        Me.Label5 = New System.Windows.Forms.Label()
        Me.Label4 = New System.Windows.Forms.Label()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Inscription = New System.Windows.Forms.TextBox()
        Me.Observation = New System.Windows.Forms.TextBox()
        Me.cin = New System.Windows.Forms.TextBox()
        Me.montant = New System.Windows.Forms.TextBox()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.recu = New System.Windows.Forms.TextBox()
        Me.Label7 = New System.Windows.Forms.Label()
        Me.Nom = New System.Windows.Forms.TextBox()
        Me.Supprimer = New System.Windows.Forms.Button()
        Me.IDCompte = New System.Windows.Forms.Label()
        Me.Label10 = New System.Windows.Forms.Label()
        Me.user = New System.Windows.Forms.Label()
        Me.erreur = New System.Windows.Forms.Label()
        Me.Button1 = New System.Windows.Forms.Button()
        Me.Button2 = New System.Windows.Forms.Button()
        Me.exporter = New System.Windows.Forms.Button()
        Me.SaveFileDialog1 = New System.Windows.Forms.SaveFileDialog()
        Me.Button3 = New System.Windows.Forms.Button()
        Me.Label9 = New System.Windows.Forms.Label()
        Me.Prenom = New System.Windows.Forms.TextBox()
        Me.somme = New System.Windows.Forms.Button()
        Me.admin = New System.Windows.Forms.Label()
        Me.Button4 = New System.Windows.Forms.Button()
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'DataGridView1
        '
        Me.DataGridView1.AllowUserToAddRows = False
        Me.DataGridView1.AllowUserToDeleteRows = False
        Me.DataGridView1.BackgroundColor = System.Drawing.Color.White
        Me.DataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize
        Me.DataGridView1.Location = New System.Drawing.Point(17, 15)
        Me.DataGridView1.Margin = New System.Windows.Forms.Padding(8, 6, 8, 6)
        Me.DataGridView1.Name = "DataGridView1"
        Me.DataGridView1.ReadOnly = True
        Me.DataGridView1.Size = New System.Drawing.Size(1258, 275)
        Me.DataGridView1.TabIndex = 1
        '
        'Modifier
        '
        Me.Modifier.Location = New System.Drawing.Point(995, 300)
        Me.Modifier.Margin = New System.Windows.Forms.Padding(8, 6, 8, 6)
        Me.Modifier.Name = "Modifier"
        Me.Modifier.Size = New System.Drawing.Size(132, 74)
        Me.Modifier.TabIndex = 10
        Me.Modifier.Text = "Modifier "
        Me.Modifier.UseVisualStyleBackColor = True
        '
        'Annuler
        '
        Me.Annuler.Location = New System.Drawing.Point(1143, 390)
        Me.Annuler.Margin = New System.Windows.Forms.Padding(8, 6, 8, 6)
        Me.Annuler.Name = "Annuler"
        Me.Annuler.Size = New System.Drawing.Size(132, 74)
        Me.Annuler.TabIndex = 12
        Me.Annuler.Text = "Annuler"
        Me.Annuler.UseVisualStyleBackColor = True
        '
        'filiere
        '
        Me.filiere.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList
        Me.filiere.FormattingEnabled = True
        Me.filiere.Items.AddRange(New Object() {"DTS - Développement Informatique", "DTS - Systèmes et Réseaux", "DTS - Gestion des Entreprises", "DTS - Financier Comptable", "DTS - Gestion en Transport et Logistique", "DT   - Exploitation en Transport et Logistique", "DT   - Gestion Informatisée", "DT   - Commercial", "DT   - Comptable", "DQ  - Opérateur de Saisie"})
        Me.filiere.Location = New System.Drawing.Point(199, 368)
        Me.filiere.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.filiere.Name = "filiere"
        Me.filiere.Size = New System.Drawing.Size(310, 28)
        Me.filiere.TabIndex = 4
        '
        'DateTimePicker1
        '
        Me.DateTimePicker1.CalendarFont = New System.Drawing.Font("Microsoft Sans Serif", 9.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.DateTimePicker1.CustomFormat = "yyyy-MM-dd"
        Me.DateTimePicker1.Format = System.Windows.Forms.DateTimePickerFormat.Custom
        Me.DateTimePicker1.Location = New System.Drawing.Point(661, 402)
        Me.DateTimePicker1.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.DateTimePicker1.MinDate = New Date(2019, 1, 1, 0, 0, 0, 0)
        Me.DateTimePicker1.Name = "DateTimePicker1"
        Me.DateTimePicker1.Size = New System.Drawing.Size(222, 26)
        Me.DateTimePicker1.TabIndex = 9
        '
        'Label8
        '
        Me.Label8.AutoSize = True
        Me.Label8.Location = New System.Drawing.Point(597, 405)
        Me.Label8.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label8.Name = "Label8"
        Me.Label8.Size = New System.Drawing.Size(58, 20)
        Me.Label8.TabIndex = 15
        Me.Label8.Text = "Date :"
        '
        'Label6
        '
        Me.Label6.AutoSize = True
        Me.Label6.Location = New System.Drawing.Point(571, 368)
        Me.Label6.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label6.Name = "Label6"
        Me.Label6.Size = New System.Drawing.Size(84, 20)
        Me.Label6.TabIndex = 16
        Me.Label6.Text = "N° Reçu :"
        '
        'Label5
        '
        Me.Label5.AutoSize = True
        Me.Label5.Location = New System.Drawing.Point(78, 404)
        Me.Label5.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label5.Name = "Label5"
        Me.Label5.Size = New System.Drawing.Size(115, 20)
        Me.Label5.TabIndex = 17
        Me.Label5.Text = "Observation :"
        '
        'Label4
        '
        Me.Label4.AutoSize = True
        Me.Label4.Location = New System.Drawing.Point(125, 371)
        Me.Label4.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(68, 20)
        Me.Label4.TabIndex = 18
        Me.Label4.Text = "Filière :"
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Location = New System.Drawing.Point(144, 337)
        Me.Label3.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(49, 20)
        Me.Label3.TabIndex = 19
        Me.Label3.Text = "CIN :"
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(570, 335)
        Me.Label1.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(85, 20)
        Me.Label1.TabIndex = 20
        Me.Label1.Text = "Montant :"
        '
        'Inscription
        '
        Me.Inscription.Location = New System.Drawing.Point(199, 438)
        Me.Inscription.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.Inscription.Name = "Inscription"
        Me.Inscription.Size = New System.Drawing.Size(310, 26)
        Me.Inscription.TabIndex = 8
        '
        'Observation
        '
        Me.Observation.BackColor = System.Drawing.SystemColors.Window
        Me.Observation.Cursor = System.Windows.Forms.Cursors.IBeam
        Me.Observation.Location = New System.Drawing.Point(199, 404)
        Me.Observation.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.Observation.Name = "Observation"
        Me.Observation.Size = New System.Drawing.Size(364, 26)
        Me.Observation.TabIndex = 6
        '
        'cin
        '
        Me.cin.Location = New System.Drawing.Point(199, 334)
        Me.cin.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.cin.Name = "cin"
        Me.cin.Size = New System.Drawing.Size(309, 26)
        Me.cin.TabIndex = 3
        '
        'montant
        '
        Me.montant.Location = New System.Drawing.Point(661, 332)
        Me.montant.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.montant.Name = "montant"
        Me.montant.Size = New System.Drawing.Size(222, 26)
        Me.montant.TabIndex = 5
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(11, 441)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(182, 20)
        Me.Label2.TabIndex = 27
        Me.Label2.Text = "Numero d'inscription :"
        '
        'recu
        '
        Me.recu.Location = New System.Drawing.Point(661, 368)
        Me.recu.Name = "recu"
        Me.recu.Size = New System.Drawing.Size(167, 26)
        Me.recu.TabIndex = 7
        '
        'Label7
        '
        Me.Label7.AutoSize = True
        Me.Label7.Location = New System.Drawing.Point(138, 303)
        Me.Label7.Name = "Label7"
        Me.Label7.Size = New System.Drawing.Size(55, 20)
        Me.Label7.TabIndex = 29
        Me.Label7.Text = "Nom :"
        '
        'Nom
        '
        Me.Nom.Location = New System.Drawing.Point(199, 300)
        Me.Nom.Name = "Nom"
        Me.Nom.Size = New System.Drawing.Size(364, 26)
        Me.Nom.TabIndex = 2
        '
        'Supprimer
        '
        Me.Supprimer.Location = New System.Drawing.Point(1143, 300)
        Me.Supprimer.Margin = New System.Windows.Forms.Padding(8, 6, 8, 6)
        Me.Supprimer.Name = "Supprimer"
        Me.Supprimer.Size = New System.Drawing.Size(132, 74)
        Me.Supprimer.TabIndex = 11
        Me.Supprimer.Text = "Supprimer"
        Me.Supprimer.UseVisualStyleBackColor = True
        Me.Supprimer.Visible = False
        '
        'IDCompte
        '
        Me.IDCompte.AutoSize = True
        Me.IDCompte.ForeColor = System.Drawing.Color.Blue
        Me.IDCompte.Location = New System.Drawing.Point(703, 444)
        Me.IDCompte.Name = "IDCompte"
        Me.IDCompte.Size = New System.Drawing.Size(19, 20)
        Me.IDCompte.TabIndex = 68
        Me.IDCompte.Text = "0"
        '
        'Label10
        '
        Me.Label10.AutoSize = True
        Me.Label10.Location = New System.Drawing.Point(657, 444)
        Me.Label10.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label10.Name = "Label10"
        Me.Label10.Size = New System.Drawing.Size(38, 20)
        Me.Label10.TabIndex = 67
        Me.Label10.Text = "ID :"
        '
        'user
        '
        Me.user.AutoSize = True
        Me.user.Location = New System.Drawing.Point(14, 342)
        Me.user.Name = "user"
        Me.user.Size = New System.Drawing.Size(44, 20)
        Me.user.TabIndex = 69
        Me.user.Text = "user"
        Me.user.Visible = False
        '
        'erreur
        '
        Me.erreur.AutoSize = True
        Me.erreur.Location = New System.Drawing.Point(7, 362)
        Me.erreur.Name = "erreur"
        Me.erreur.Size = New System.Drawing.Size(63, 20)
        Me.erreur.TabIndex = 70
        Me.erreur.Text = "Label7"
        Me.erreur.Visible = False
        '
        'Button1
        '
        Me.Button1.Location = New System.Drawing.Point(516, 334)
        Me.Button1.Name = "Button1"
        Me.Button1.Size = New System.Drawing.Size(47, 26)
        Me.Button1.TabIndex = 71
        Me.Button1.Text = "***"
        Me.Button1.UseVisualStyleBackColor = True
        '
        'Button2
        '
        Me.Button2.Location = New System.Drawing.Point(837, 368)
        Me.Button2.Name = "Button2"
        Me.Button2.Size = New System.Drawing.Size(46, 26)
        Me.Button2.TabIndex = 72
        Me.Button2.Text = "***"
        Me.Button2.UseVisualStyleBackColor = True
        '
        'exporter
        '
        Me.exporter.Location = New System.Drawing.Point(995, 390)
        Me.exporter.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.exporter.Name = "exporter"
        Me.exporter.Size = New System.Drawing.Size(132, 74)
        Me.exporter.TabIndex = 95
        Me.exporter.Text = "Exporter"
        Me.exporter.UseVisualStyleBackColor = True
        '
        'SaveFileDialog1
        '
        Me.SaveFileDialog1.Filter = "Fichier Excel|*.xlsx"
        '
        'Button3
        '
        Me.Button3.Location = New System.Drawing.Point(516, 438)
        Me.Button3.Name = "Button3"
        Me.Button3.Size = New System.Drawing.Size(47, 26)
        Me.Button3.TabIndex = 96
        Me.Button3.Text = "***"
        Me.Button3.UseVisualStyleBackColor = True
        '
        'Label9
        '
        Me.Label9.AutoSize = True
        Me.Label9.Location = New System.Drawing.Point(575, 302)
        Me.Label9.Name = "Label9"
        Me.Label9.Size = New System.Drawing.Size(80, 20)
        Me.Label9.TabIndex = 98
        Me.Label9.Text = "Prenom :"
        '
        'Prenom
        '
        Me.Prenom.Location = New System.Drawing.Point(661, 299)
        Me.Prenom.Name = "Prenom"
        Me.Prenom.Size = New System.Drawing.Size(222, 26)
        Me.Prenom.TabIndex = 97
        '
        'somme
        '
        Me.somme.Location = New System.Drawing.Point(889, 300)
        Me.somme.Name = "somme"
        Me.somme.Size = New System.Drawing.Size(98, 164)
        Me.somme.TabIndex = 99
        Me.somme.Text = "voir somme"
        Me.somme.UseVisualStyleBackColor = True
        '
        'admin
        '
        Me.admin.AutoSize = True
        Me.admin.Location = New System.Drawing.Point(534, 225)
        Me.admin.Name = "admin"
        Me.admin.Size = New System.Drawing.Size(57, 20)
        Me.admin.TabIndex = 100
        Me.admin.Text = "admin"
        Me.admin.Visible = False
        '
        'Button4
        '
        Me.Button4.Location = New System.Drawing.Point(516, 368)
        Me.Button4.Name = "Button4"
        Me.Button4.Size = New System.Drawing.Size(47, 28)
        Me.Button4.TabIndex = 101
        Me.Button4.Text = "***"
        Me.Button4.UseVisualStyleBackColor = True
        '
        'modif_pay
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(10.0!, 20.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(1292, 471)
        Me.Controls.Add(Me.Button4)
        Me.Controls.Add(Me.admin)
        Me.Controls.Add(Me.somme)
        Me.Controls.Add(Me.Label9)
        Me.Controls.Add(Me.Prenom)
        Me.Controls.Add(Me.Button3)
        Me.Controls.Add(Me.exporter)
        Me.Controls.Add(Me.Button2)
        Me.Controls.Add(Me.Button1)
        Me.Controls.Add(Me.erreur)
        Me.Controls.Add(Me.user)
        Me.Controls.Add(Me.IDCompte)
        Me.Controls.Add(Me.Label10)
        Me.Controls.Add(Me.Supprimer)
        Me.Controls.Add(Me.Inscription)
        Me.Controls.Add(Me.Label7)
        Me.Controls.Add(Me.Nom)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.recu)
        Me.Controls.Add(Me.filiere)
        Me.Controls.Add(Me.DateTimePicker1)
        Me.Controls.Add(Me.Label8)
        Me.Controls.Add(Me.Label6)
        Me.Controls.Add(Me.Label5)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.Observation)
        Me.Controls.Add(Me.cin)
        Me.Controls.Add(Me.montant)
        Me.Controls.Add(Me.Modifier)
        Me.Controls.Add(Me.Annuler)
        Me.Controls.Add(Me.DataGridView1)
        Me.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Bold)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle
        Me.Icon = CType(resources.GetObject("$this.Icon"), System.Drawing.Icon)
        Me.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.MaximizeBox = False
        Me.Name = "modif_pay"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents DataGridView1 As DataGridView
    Friend WithEvents Modifier As Button
    Friend WithEvents Annuler As Button
    Friend WithEvents filiere As ComboBox
    Friend WithEvents DateTimePicker1 As DateTimePicker
    Friend WithEvents Label8 As Label
    Friend WithEvents Label6 As Label
    Friend WithEvents Label5 As Label
    Friend WithEvents Label4 As Label
    Friend WithEvents Label3 As Label
    Friend WithEvents Label1 As Label
    Friend WithEvents Inscription As TextBox
    Friend WithEvents Observation As TextBox
    Friend WithEvents cin As TextBox
    Friend WithEvents montant As TextBox
    Friend WithEvents Label2 As Label
    Friend WithEvents recu As TextBox
    Friend WithEvents Label7 As Label
    Friend WithEvents Nom As TextBox
    Friend WithEvents Supprimer As Button
    Friend WithEvents IDCompte As Label
    Friend WithEvents Label10 As Label
    Friend WithEvents user As Label
    Friend WithEvents erreur As Label
    Friend WithEvents Button1 As Button
    Friend WithEvents Button2 As Button
    Friend WithEvents exporter As Button
    Friend WithEvents SaveFileDialog1 As SaveFileDialog
    Friend WithEvents Button3 As Button
    Friend WithEvents Label9 As Label
    Friend WithEvents Prenom As TextBox
    Friend WithEvents somme As Button
    Friend WithEvents admin As Label
    Friend WithEvents Button4 As Button
End Class
