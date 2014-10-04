package com.example.myapp;

import android.app.Application;
	public class MyApp extends Application
	{
	   private static MyApp singleton;
	   private String globalVariable1;
	   private String globalVariable2;
	   
	   // Returns the application instance
	   public static MyApp getInstance() {
	      return singleton;
	   }

	   @Override
	   public final void onCreate() {
	      super.onCreate();
	      singleton = this;
	   }
	   public String getglobalVaiable1(){
		   return this.globalVariable1;
		   }
	   public String getglobalVaiable2(){
		   return this.globalVariable2;
		   }
	   
	   public void setglobalVariable1(String globalVariable1){
	   
		   this.globalVariable1=globalVariable1;
		 

	   }
	   public void setglobalVariable2(String globalVariable2){
		   
		   this.globalVariable2=globalVariable2;
		 

	   }
	
	}
