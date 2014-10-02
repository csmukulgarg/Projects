package com.icl.examples;

import android.app.Activity;
import android.os.Bundle;
import android.view.KeyEvent;
import android.view.View;
import android.view.View.OnKeyListener;
import android.widget.EditText;

public class ICLLocalization extends Activity {
    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
        
   	 // Get references to UI widgets
	    final EditText myEditText1 = (EditText)findViewById(R.id.editText1);
	    final EditText myEditText2 = (EditText)findViewById(R.id.editText2);
	    
	    myEditText2.setOnKeyListener(new OnKeyListener() {
	        @Override
			public boolean onKey(View v, int keyCode, KeyEvent event) {
	          if (event.getAction() == KeyEvent.ACTION_DOWN)
	            if (keyCode == KeyEvent.KEYCODE_DPAD_RIGHT)
	            {        
	            	String temp = myEditText2.getText().toString(); 
	            	myEditText2.setText(myEditText1.getText());
	            	myEditText1.setText(temp);
	              return true;
	            }
	          return false;
	        }
	      });
    }
}