import React from 'react';
import { 
  StyleSheet,
   Text, 
   View,
   Image
 } from 'react-native';

export default class Logo extends React.Component<{}>{
	render(){
		return(
			<View style={styles.container}>
				<Image  style={{width: 120, height: 110}}
          		source={require('../image/logoNuevo.png')}
        		/>
        		<Text style={styles.logoText}> ISLA AGUADA </Text>
			</View>
		)
	}
}


const styles = StyleSheet.create({
  container: {
    flexGrow: 1,
    justifyContent:'center',
    alignItems: 'center'
  },
  logoText:{
    
  	fontSize:18,
  	color:'rgba(255,255,255, 0.7)'
  }
});