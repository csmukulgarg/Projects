package com.example.myapp;

import android.os.Bundle;
import android.app.Activity;
import android.content.res.Configuration;
import android.view.KeyEvent;
import android.view.Menu;
import android.view.View;
import android.view.View.OnKeyListener;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends Activity {

	protected MyApp myApp;
	   EditText myEditText1;
	   EditText myEditText2;
	   
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

		 // Get references to UI widgets
	     myEditText1 = (EditText)findViewById(R.id.editText1);
	     myEditText2 = (EditText)findViewById(R.id.editText2);
	   
	     
	    myEditText2.setOnKeyListener(new OnKeyListener() {
	        @Override
			public boolean onKey(View v, int keyCode, KeyEvent event) {
	          if (event.getAction() == KeyEvent.ACTION_DOWN)
	            if (keyCode == KeyEvent.KEYCODE_DPAD_CENTER)
	            {     
	            	
	            	//setting global variables
	            	((MyApp)getApplication()).setglobalVariable1(myEditText1.getText().toString());
	            	((MyApp)getApplication()).setglobalVariable2(myEditText2.getText().toString());

	 
	            	
	              return true;
	            }
	          return false;
	        }
	      });
	    
	}


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }
    @Override
	public  void onConfigurationChanged(Configuration newConfig)
    {
        super.onConfigurationChanged(newConfig);
        myEditText1.setText(((MyApp)getApplication()).getglobalVaiable2());
        myEditText2.setText(((MyApp)getApplication()).getglobalVaiable1());

        Toast.makeText(this,"Oriantation is changed", Toast.LENGTH_LONG).show();
    }
    
}
