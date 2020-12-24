<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class ajou_pay
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()>
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
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(ajou_pay))
        Me.montant = New System.Windows.Forms.TextBox()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.cin = New System.Windows.Forms.TextBox()
        Me.Observation = New System.Windows.Forms.TextBox()
        Me.recu = New System.Windows.Forms.TextBox()
        Me.Label4 = New System.Windows.Forms.Label()
        Me.Label5 = New System.Windows.Forms.Label()
        Me.Label6 = New System.Windows.Forms.Label()
        Me.Label8 = New System.Windows.Forms.Label()
        Me.Annuler = New System.Windows.Forms.Button()
        Me.Ajouter = New System.Windows.Forms.Button()
        Me.filiere = New System.Windows.Forms.ComboBox()
        Me.nom = New System.Windows.Forms.Label()
        Me.user = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.Inscription = New System.Windows.Forms.TextBox()
        Me.DataGridView1 = New System.Windows.Forms.DataGridView()
        Me.Rechercher = New System.Windows.Forms.Button()
        Me.DateTimePicker1 = New System.Windows.Forms.DateTimePicker()
        Me.erreur = New System.Windows.Forms.Label()
        Me.Prenom = New System.Windows.Forms.Label()
        Me.Rechercher2 = New System.Windows.Forms.Button()
        Me.admin = New System.Windows.Forms.Label()
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'montant
        '
        Me.montant.Location = New System.Drawing.Point(204, 171)
        Me.montant.Name = "montant"
        Me.montant.Size = New System.Drawing.Size(251, 26)
        Me.montant.TabIndex = 3
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(115, 174)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(85, 20)
        Me.Label1.TabIndex = 2
        Me.Label1.Text = "Montant :"
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Location = New System.Drawing.Point(151, 76)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(49, 20)
        Me.Label3.TabIndex = 2
        Me.Label3.Text = "CIN :"
        '
        'cin
        '
        Me.cin.Location = New System.Drawing.Point(204, 73)
        Me.cin.Name = "cin"
        Me.cin.Size = New System.Drawing.Size(125, 26)
        Me.cin.TabIndex = 1
        '
        'Observation
        '
        Me.Observation.BackColor = System.Drawing.SystemColors.Control
        Me.Observation.BorderStyle = System.Windows.Forms.BorderStyle.None
        Me.Observation.Cursor = System.Windows.Forms.Cursors.Default
        Me.Observation.Enabled = False
        Me.Observation.Location = New System.Drawing.Point(204, 41)
        Me.Observation.Name = "Observation"
        Me.Observation.ReadOnly = True
        Me.Observation.Size = New System.Drawing.Size(251, 19)
        Me.Observation.TabIndex = 4
        '
        'recu
        '
        Me.recu.Location = New System.Drawing.Point(204, 203)
        Me.recu.Name = "recu"
        Me.recu.Size = New System.Drawing.Size(251, 26)
        Me.recu.TabIndex = 5
        '
        'Label4
        '
        Me.Label4.AutoSize = True
        Me.Label4.Location = New System.Drawing.Point(132, 140)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(68, 20)
        Me.Label4.TabIndex = 2
        Me.Label4.Text = "Filière :"
        '
        'Label5
        '
        Me.Label5.AutoSize = True
        Me.Label5.Location = New System.Drawing.Point(85, 41)
        Me.Label5.Name = "Label5"
        Me.Label5.Size = New System.Drawing.Size(115, 20)
        Me.Label5.TabIndex = 2
        Me.Label5.Text = "Observation :"
        '
        'Label6
        '
        Me.Label6.AutoSize = True
        Me.Label6.Location = New System.Drawing.Point(116, 206)
        Me.Label6.Name = "Label6"
        Me.Label6.Size = New System.Drawing.Size(84, 20)
        Me.Label6.TabIndex = 2
        Me.Label6.Text = "N° Reçu :"
        '
        'Label8
        '
        Me.Label8.AutoSize = True
        Me.Label8.Location = New System.Drawing.Point(142, 237)
        Me.Label8.Name = "Label8"
        Me.Label8.Size = New System.Drawing.Size(58, 20)
        Me.Label8.TabIndex = 2
        Me.Label8.Text = "Date :"
        '
        'Annuler
        '
        Me.Annuler.Location = New System.Drawing.Point(32, 264)
        Me.Annuler.Name = "Annuler"
        Me.Annuler.Size = New System.Drawing.Size(186, 31)
        Me.Annuler.TabIndex = 10
        Me.Annuler.Text = "Annuler"
        Me.Annuler.UseVisualStyleBackColor = True
        '
        'Ajouter
        '
        Me.Ajouter.Location = New System.Drawing.Point(269, 267)
        Me.Ajouter.Name = "Ajouter"
        Me.Ajouter.Size = New System.Drawing.Size(186, 31)
        Me.Ajouter.TabIndex = 9
        Me.Ajouter.Text = "Ajouter"
        Me.Ajouter.UseVisualStyleBackColor = True
        '
        'filiere
        '
        Me.filiere.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList
        Me.filiere.FormattingEnabled = True
        Me.filiere.Items.AddRange(New Object() {"DTS - Développement Informatique", "DTS - Systèmes et Réseaux", "DTS - Gestion des Entreprises", "DTS - Financier Comptable", "DTS - Gestion en Transport et Logistique", "DT   - Exploitation en Transport et Logistique", "DT   - Gestion Informatisée", "DT   - Commercial", "DT   - Comptable", "DQ  - Opérateur de Saisie"})
        Me.filiere.Location = New System.Drawing.Point(204, 137)
        Me.filiere.Name = "filiere"
        Me.filiere.Size = New System.Drawing.Size(251, 28)
        Me.filiere.TabIndex = 2
        '
        'nom
        '
        Me.nom.AutoSize = True
        Me.nom.Location = New System.Drawing.Point(132, 9)
        Me.nom.Name = "nom"
        Me.nom.Size = New System.Drawing.Size(45, 20)
        Me.nom.TabIndex = 2
        Me.nom.Text = "Nom"
        '
        'user
        '
        Me.user.AutoSize = True
        Me.user.Location = New System.Drawing.Point(46, 61)
        Me.user.Name = "user"
        Me.user.Size = New System.Drawing.Size(44, 20)
        Me.user.TabIndex = 23
        Me.user.Text = "user"
        Me.user.Visible = False
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(16, 108)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(182, 20)
        Me.Label2.TabIndex = 25
        Me.Label2.Text = "Numero d'inscription :"
        '
        'Inscription
        '
        Me.Inscription.Location = New System.Drawing.Point(204, 105)
        Me.Inscription.Name = "Inscription"
        Me.Inscription.Size = New System.Drawing.Size(125, 26)
        Me.Inscription.TabIndex = 24
        '
        'DataGridView1
        '
        Me.DataGridView1.AllowUserToAddRows = False
        Me.DataGridView1.AllowUserToDeleteRows = False
        Me.DataGridView1.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill
        Me.DataGridView1.BackgroundColor = System.Drawing.Color.White
        Me.DataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize
        Me.DataGridView1.EditMode = System.Windows.Forms.DataGridViewEditMode.EditOnEnter
        Me.DataGridView1.Location = New System.Drawing.Point(477, 12)
        Me.DataGridView1.Name = "DataGridView1"
        Me.DataGridView1.ReadOnly = True
        Me.DataGridView1.Size = New System.Drawing.Size(613, 286)
        Me.DataGridView1.TabIndex = 61
        '
        'Rechercher
        '
        Me.Rechercher.Location = New System.Drawing.Point(335, 73)
        Me.Rechercher.Name = "Rechercher"
        Me.Rechercher.Size = New System.Drawing.Size(120, 26)
        Me.Rechercher.TabIndex = 62
        Me.Rechercher.Text = "Rechercher"
        Me.Rechercher.UseVisualStyleBackColor = True
        '
        'DateTimePicker1
        '
        Me.DateTimePicker1.CalendarFont = New System.Drawing.Font("Microsoft Sans Serif", 9.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.DateTimePicker1.CustomFormat = "yyyy-MM-dd"
        Me.DateTimePicker1.Format = System.Windows.Forms.DateTimePickerFormat.Custom
        Me.DateTimePicker1.Location = New System.Drawing.Point(204, 235)
        Me.DateTimePicker1.MinDate = New Date(2019, 1, 1, 0, 0, 0, 0)
        Me.DateTimePicker1.Name = "DateTimePicker1"
        Me.DateTimePicker1.Size = New System.Drawing.Size(251, 26)
        Me.DateTimePicker1.TabIndex = 63
        '
        'erreur
        '
        Me.erreur.AutoSize = True
        Me.erreur.Location = New System.Drawing.Point(32, 85)
        Me.erreur.Name = "erreur"
        Me.erreur.Size = New System.Drawing.Size(63, 20)
        Me.erreur.TabIndex = 64
        Me.erreur.Text = "Label7"
        Me.erreur.Visible = False
        '
        'Prenom
        '
        Me.Prenom.AutoSize = True
        Me.Prenom.Location = New System.Drawing.Point(265, 9)
        Me.Prenom.Name = "Prenom"
        Me.Prenom.Size = New System.Drawing.Size(70, 20)
        Me.Prenom.TabIndex = 65
        Me.Prenom.Text = "Prenom"
        '
        'Rechercher2
        '
        Me.Rechercher2.Location = New System.Drawing.Point(335, 105)
        Me.Rechercher2.Name = "Rechercher2"
        Me.Rechercher2.Size = New System.Drawing.Size(120, 26)
        Me.Rechercher2.TabIndex = 66
        Me.Rechercher2.Text = "Rechercher"
        Me.Rechercher2.UseVisualStyleBackColor = True
        '
        'admin
        '
        Me.admin.AutoSize = True
        Me.admin.Location = New System.Drawing.Point(38, 145)
        Me.admin.Name = "admin"
        Me.admin.Size = New System.Drawing.Size(57, 20)
        Me.admin.TabIndex = 101
        Me.admin.Text = "admin"
        Me.admin.Visible = False
        '
        'ajou_pay
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(10.0!, 20.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(1102, 308)
        Me.Controls.Add(Me.admin)
        Me.Controls.Add(Me.Rechercher2)
        Me.Controls.Add(Me.Prenom)
        Me.Controls.Add(Me.erreur)
        Me.Controls.Add(Me.DateTimePicker1)
        Me.Controls.Add(Me.Rechercher)
        Me.Controls.Add(Me.DataGridView1)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Inscription)
        Me.Controls.Add(Me.user)
        Me.Controls.Add(Me.filiere)
        Me.Controls.Add(Me.Ajouter)
        Me.Controls.Add(Me.Annuler)
        Me.Controls.Add(Me.Label8)
        Me.Controls.Add(Me.Label6)
        Me.Controls.Add(Me.Label5)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.nom)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.recu)
        Me.Controls.Add(Me.Observation)
        Me.Controls.Add(Me.cin)
        Me.Controls.Add(Me.montant)
        Me.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Bold)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle
        Me.Icon = CType(resources.GetObject("$this.Icon"), System.Drawing.Icon)
        Me.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.MaximizeBox = False
        Me.Name = "ajou_pay"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents montant As TextBox
    Friend WithEvents Label1 As Label
    Friend WithEvents Label3 As Label
    Friend WithEvents cin As TextBox
    Friend WithEvents Observation As TextBox
    Friend WithEvents recu As TextBox
    Friend WithEvents Label4 As Label
    Friend WithEvents Label5 As Label
    Friend WithEvents Label6 As Label
    Friend WithEvents Label8 As Label
    Friend WithEvents Annuler As Button
    Friend WithEvents Ajouter As Button
    Friend WithEvents filiere As ComboBox
    Friend WithEvents nom As Label
    Friend WithEvents user As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents Inscription As TextBox
    Friend WithEvents DataGridView1 As DataGridView
    Friend WithEvents Rechercher As Button
    Friend WithEvents DateTimePicker1 As DateTimePicker
    Friend WithEvents erreur As Label
    Friend WithEvents Prenom As Label
    Friend WithEvents Rechercher2 As Button
    Friend WithEvents admin As Label
End Class
