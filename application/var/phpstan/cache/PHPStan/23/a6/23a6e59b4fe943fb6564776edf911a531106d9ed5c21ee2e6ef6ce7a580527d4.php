<?php declare(strict_types = 1);

// osfsl-/var/www/application/vendor/composer/../tymon/jwt-auth/src/JWTAuth.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Tymon\JWTAuth\JWTAuth
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-07af4bf190320aeed1858641543e8f7233242ee63f352a51befaaa2d83b607be-8.4.24-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Tymon\\JWTAuth\\JWTAuth',
        'filename' => '/var/www/application/vendor/composer/../tymon/jwt-auth/src/JWTAuth.php',
      ),
    ),
    'namespace' => 'Tymon\\JWTAuth',
    'name' => 'Tymon\\JWTAuth\\JWTAuth',
    'shortName' => 'JWTAuth',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/** @deprecated */',
    'attributes' => 
    array (
    ),
    'startLine' => 18,
    'endLine' => 91,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Tymon\\JWTAuth\\JWT',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'auth' => 
      array (
        'declaringClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'name' => 'auth',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The authentication provider.
 *
 * @var \\Tymon\\JWTAuth\\Contracts\\Providers\\Auth
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Tymon\\JWTAuth\\Manager',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'auth' => 
          array (
            'name' => 'auth',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Tymon\\JWTAuth\\Contracts\\Providers\\Auth',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 51,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'parser' => 
          array (
            'name' => 'parser',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Tymon\\JWTAuth\\Http\\Parser\\Parser',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 63,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructor.
 *
 * @param  \\Tymon\\JWTAuth\\Manager  $manager
 * @param  \\Tymon\\JWTAuth\\Contracts\\Providers\\Auth  $auth
 * @param  \\Tymon\\JWTAuth\\Http\\Parser\\Parser  $parser
 * @return void
 */',
        'startLine' => 35,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'currentClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'aliasName' => NULL,
      ),
      'attempt' => 
      array (
        'name' => 'attempt',
        'parameters' => 
        array (
          'credentials' => 
          array (
            'name' => 'credentials',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 29,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Attempt to authenticate the user and return the token.
 *
 * @param  array  $credentials
 * @return false|string
 */',
        'startLine' => 47,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'currentClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'aliasName' => NULL,
      ),
      'authenticate' => 
      array (
        'name' => 'authenticate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Authenticate a user via a token.
 *
 * @return \\Tymon\\JWTAuth\\Contracts\\JWTSubject|false
 */',
        'startLine' => 61,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'currentClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'aliasName' => NULL,
      ),
      'toUser' => 
      array (
        'name' => 'toUser',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias for authenticate().
 *
 * @return \\Tymon\\JWTAuth\\Contracts\\JWTSubject|false
 */',
        'startLine' => 77,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'currentClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'aliasName' => NULL,
      ),
      'user' => 
      array (
        'name' => 'user',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the authenticated user.
 *
 * @return \\Tymon\\JWTAuth\\Contracts\\JWTSubject
 */',
        'startLine' => 87,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'currentClassName' => 'Tymon\\JWTAuth\\JWTAuth',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));