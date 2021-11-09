public class DbConnection{

    private static DbConnection instance=null;
    private SQLConnection connection;

    private DbConnection() { 
	 connection = connectToDatabase(dbUser,dbPassword,dbName);
   }

    public static DbConnection getDbConnection() {
      if (instance== null ) 
		instance = new DbConnection() ;                           

      return instance;
    }
}

DbConnection connection=DbConnection.getDbConnection();
