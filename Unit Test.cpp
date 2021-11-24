class PasswordConnection
{
	func saveUser(db *sql.DB, user *User) error {
	if user.EmailAddress == "" {
		return errors.New("User requires an email")
	}
	if len(user.Password) < 8 {
		return errors.New("User password requires at least 8 characters")
	}
	hashedPassword, err = hash(user.Password)
	if err != nil {
		return err
	}
	_, err := db.Exec(`                                                                                                                          
		INSERT INTO usr (password, email_address, created)                                                                                                                                                                                                                                                                                                                                                                                       
		VALUES ($1, $2, $3);`,
		hashedPassword, user.EmailAddress, time.Now(),
	)
	return err

}
