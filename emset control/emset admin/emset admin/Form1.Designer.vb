<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Form1
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
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(Form1))
        Me.modif = New System.Windows.Forms.Button()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.User = New System.Windows.Forms.TextBox()
        Me.password = New System.Windows.Forms.TextBox()
        Me.admin = New System.Windows.Forms.ComboBox()
        Me.ajoute = New System.Windows.Forms.Button()
        Me.Erreur = New System.Windows.Forms.Label()
        Me.supp = New System.Windows.Forms.Button()
        Me.IDCompte = New System.Windows.Forms.Label()
        Me.DataGridView1 = New System.Windows.Forms.DataGridView()
        Me.Label4 = New System.Windows.Forms.Label()
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'modif
        '
        Me.modif.Location = New System.Drawing.Point(541, 249)
        Me.modif.Margin = New System.Windows.Forms.Padding(5)
        Me.modif.Name = "modif"
        Me.modif.Size = New System.Drawing.Size(125, 44)
        Me.modif.TabIndex = 1
        Me.modif.Text = "Modifier"
        Me.modif.UseVisualStyleBackColor = True
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(78, 252)
        Me.Label1.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(55, 20)
        Me.Label1.TabIndex = 2
        Me.Label1.Text = "Nom :"
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(16, 284)
        Me.Label2.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(117, 20)
        Me.Label2.TabIndex = 3
        Me.Label2.Text = "Mot de pass :"
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Location = New System.Drawing.Point(64, 316)
        Me.Label3.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(69, 20)
        Me.Label3.TabIndex = 4
        Me.Label3.Text = "Admin :"
        '
        'User
        '
        Me.User.Location = New System.Drawing.Point(141, 249)
        Me.User.Name = "User"
        Me.User.Size = New System.Drawing.Size(258, 26)
        Me.User.TabIndex = 5
        '
        'password
        '
        Me.password.Location = New System.Drawing.Point(141, 281)
        Me.password.Name = "password"
        Me.password.Size = New System.Drawing.Size(258, 26)
        Me.password.TabIndex = 6
        '
        'admin
        '
        Me.admin.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList
        Me.admin.FormattingEnabled = True
        Me.admin.Items.AddRange(New Object() {"oui", "non"})
        Me.admin.Location = New System.Drawing.Point(141, 313)
        Me.admin.Name = "admin"
        Me.admin.Size = New System.Drawing.Size(258, 28)
        Me.admin.TabIndex = 7
        '
        'ajoute
        '
        Me.ajoute.Location = New System.Drawing.Point(407, 249)
        Me.ajoute.Margin = New System.Windows.Forms.Padding(5)
        Me.ajoute.Name = "ajoute"
        Me.ajoute.Size = New System.Drawing.Size(125, 92)
        Me.ajoute.TabIndex = 1
        Me.ajoute.Text = "Ajouter"
        Me.ajoute.UseVisualStyleBackColor = True
        '
        'Erreur
        '
        Me.Erreur.AutoSize = True
        Me.Erreur.Location = New System.Drawing.Point(528, 346)
        Me.Erreur.Name = "Erreur"
        Me.Erreur.Size = New System.Drawing.Size(63, 20)
        Me.Erreur.TabIndex = 58
        Me.Erreur.Text = "Label2"
        Me.Erreur.Visible = False
        '
        'supp
        '
        Me.supp.Location = New System.Drawing.Point(541, 297)
        Me.supp.Margin = New System.Windows.Forms.Padding(5)
        Me.supp.Name = "supp"
        Me.supp.Size = New System.Drawing.Size(125, 44)
        Me.supp.TabIndex = 1
        Me.supp.Text = "Supprimer"
        Me.supp.UseVisualStyleBackColor = True
        '
        'IDCompte
        '
        Me.IDCompte.AutoSize = True
        Me.IDCompte.ForeColor = System.Drawing.Color.Blue
        Me.IDCompte.Location = New System.Drawing.Point(139, 346)
        Me.IDCompte.Name = "IDCompte"
        Me.IDCompte.Size = New System.Drawing.Size(19, 20)
        Me.IDCompte.TabIndex = 59
        Me.IDCompte.Text = "0"
        '
        'DataGridView1
        '
        Me.DataGridView1.AllowUserToAddRows = False
        Me.DataGridView1.AllowUserToDeleteRows = False
        Me.DataGridView1.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill
        Me.DataGridView1.BackgroundColor = System.Drawing.Color.White
        Me.DataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize
        Me.DataGridView1.EditMode = System.Windows.Forms.DataGridViewEditMode.EditOnEnter
        Me.DataGridView1.Location = New System.Drawing.Point(12, 12)
        Me.DataGridView1.Name = "DataGridView1"
        Me.DataGridView1.ReadOnly = True
        Me.DataGridView1.Size = New System.Drawing.Size(663, 229)
        Me.DataGridView1.TabIndex = 60
        '
        'Label4
        '
        Me.Label4.AutoSize = True
        Me.Label4.Location = New System.Drawing.Point(98, 346)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(35, 20)
        Me.Label4.TabIndex = 61
        Me.Label4.Text = "Id :"
        '
        'Form1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(10.0!, 20.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(687, 377)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.DataGridView1)
        Me.Controls.Add(Me.IDCompte)
        Me.Controls.Add(Me.Erreur)
        Me.Controls.Add(Me.admin)
        Me.Controls.Add(Me.password)
        Me.Controls.Add(Me.User)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.ajoute)
        Me.Controls.Add(Me.supp)
        Me.Controls.Add(Me.modif)
        Me.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Bold)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle
        Me.Icon = CType(resources.GetObject("$this.Icon"), System.Drawing.Icon)
        Me.Margin = New System.Windows.Forms.Padding(5)
        Me.MaximizeBox = False
        Me.Name = "Form1"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents modif As Button
    Friend WithEvents Label1 As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents Label3 As Label
    Friend WithEvents User As TextBox
    Friend WithEvents password As TextBox
    Friend WithEvents admin As ComboBox
    Friend WithEvents ajoute As Button
    Friend WithEvents Erreur As Label
    Friend WithEvents supp As Button
    Friend WithEvents IDCompte As Label
    Friend WithEvents DataGridView1 As DataGridView
    Friend WithEvents Label4 As Label
End Class
