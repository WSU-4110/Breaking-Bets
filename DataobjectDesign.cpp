class Data {
 public:
  static Data& GetInstance() {
    // Allocate with `new` in case Singleton is not trivially destructible.
      static Data* Data = new class Data();
      return *Data;
  }

 private:
  Data() = default;

  // Delete copy/move so extra instances can't be created/moved.
  Data(const Data&) = delete;
  Data& operator=(const Data&) = delete;
  Data(Data&&) = delete;
  Data& operator=(Data&&) = delete;
};
