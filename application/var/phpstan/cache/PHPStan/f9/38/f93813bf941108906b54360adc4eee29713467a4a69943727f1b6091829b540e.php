<?php declare(strict_types = 1);

// osfsl-/var/www/application/vendor/composer/../tymon/jwt-auth/src/JWT.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Tymon\JWTAuth\JWT
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3b27d249628baf1b15116e42a61b3ffc174c479d19747d0ac023b9858b8920a6-8.4.24-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Tymon\\JWTAuth\\JWT',
        'filename' => '/var/www/application/vendor/composer/../tymon/jwt-auth/src/JWT.php',
      ),
    ),
    'namespace' => 'Tymon\\JWTAuth',
    'name' => 'Tymon\\JWTAuth\\JWT',
    'shortName' => 'JWT',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 405,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Tymon\\JWTAuth\\Support\\CustomClaims',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'manager' => 
      array (
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'name' => 'manager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The authentication manager.
 *
 * @var \\Tymon\\JWTAuth\\Manager
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'parser' => 
      array (
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'name' => 'parser',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The HTTP parser.
 *
 * @var \\Tymon\\JWTAuth\\Http\\Parser\\Parser
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'token' => 
      array (
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'name' => 'token',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The token.
 *
 * @var \\Tymon\\JWTAuth\\Token|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lockSubject' => 
      array (
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'name' => 'lockSubject',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 51,
            'endLine' => 51,
            'startTokenPos' => 79,
            'startFilePos' => 932,
            'endTokenPos' => 79,
            'endFilePos' => 935,
          ),
        ),
        'docComment' => '/**
 * Lock the subject.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 34,
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
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 0,
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
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 51,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * JWT constructor.
 *
 * @param  \\Tymon\\JWTAuth\\Manager  $manager
 * @param  \\Tymon\\JWTAuth\\Http\\Parser\\Parser  $parser
 * @return void
 */',
        'startLine' => 60,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'fromSubject' => 
      array (
        'name' => 'fromSubject',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Tymon\\JWTAuth\\Contracts\\JWTSubject',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 72,
            'endLine' => 72,
            'startColumn' => 33,
            'endColumn' => 51,
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
 * Generate a token for a given subject.
 *
 * @param  \\Tymon\\JWTAuth\\Contracts\\JWTSubject  $subject
 * @return string
 */',
        'startLine' => 72,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'fromUser' => 
      array (
        'name' => 'fromUser',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Tymon\\JWTAuth\\Contracts\\JWTSubject',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 30,
            'endColumn' => 45,
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
 * Alias to generate a token for a given user.
 *
 * @param  \\Tymon\\JWTAuth\\Contracts\\JWTSubject  $user
 * @return string
 */',
        'startLine' => 85,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'refresh' => 
      array (
        'name' => 'refresh',
        'parameters' => 
        array (
          'forceForever' => 
          array (
            'name' => 'forceForever',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 97,
                'endLine' => 97,
                'startTokenPos' => 206,
                'startFilePos' => 2029,
                'endTokenPos' => 206,
                'endFilePos' => 2033,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 29,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'resetClaims' => 
          array (
            'name' => 'resetClaims',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 97,
                'endLine' => 97,
                'startTokenPos' => 213,
                'startFilePos' => 2051,
                'endTokenPos' => 213,
                'endFilePos' => 2055,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 52,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Refresh an expired token.
 *
 * @param  bool  $forceForever
 * @param  bool  $resetClaims
 * @return string
 */',
        'startLine' => 97,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'invalidate' => 
      array (
        'name' => 'invalidate',
        'parameters' => 
        array (
          'forceForever' => 
          array (
            'name' => 'forceForever',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 112,
                'endLine' => 112,
                'startTokenPos' => 274,
                'startFilePos' => 2472,
                'endTokenPos' => 274,
                'endFilePos' => 2476,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 112,
            'endLine' => 112,
            'startColumn' => 32,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Invalidate a token (add it to the blacklist).
 *
 * @param  bool  $forceForever
 * @return $this
 */',
        'startLine' => 112,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'checkOrFail' => 
      array (
        'name' => 'checkOrFail',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias to get the payload, and as a result checks that
 * the token is valid i.e. not expired or blacklisted.
 *
 * @return \\Tymon\\JWTAuth\\Payload
 *
 * @throws \\Tymon\\JWTAuth\\Exceptions\\JWTException
 */',
        'startLine' => 129,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'check' => 
      array (
        'name' => 'check',
        'parameters' => 
        array (
          'getPayload' => 
          array (
            'name' => 'getPayload',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 140,
                'endLine' => 140,
                'startTokenPos' => 343,
                'startFilePos' => 3114,
                'endTokenPos' => 343,
                'endFilePos' => 3118,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 27,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check that the token is valid.
 *
 * @param  bool  $getPayload
 * @return \\Tymon\\JWTAuth\\Payload|bool
 */',
        'startLine' => 140,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'getToken' => 
      array (
        'name' => 'getToken',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the token.
 *
 * @return \\Tymon\\JWTAuth\\Token|null
 */',
        'startLine' => 156,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'parseToken' => 
      array (
        'name' => 'parseToken',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Parse the token from the request.
 *
 * @return $this
 *
 * @throws \\Tymon\\JWTAuth\\Exceptions\\JWTException
 */',
        'startLine' => 176,
        'endLine' => 183,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'getPayload' => 
      array (
        'name' => 'getPayload',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the raw Payload instance.
 *
 * @return \\Tymon\\JWTAuth\\Payload
 */',
        'startLine' => 190,
        'endLine' => 195,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'payload' => 
      array (
        'name' => 'payload',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias for getPayload().
 *
 * @return \\Tymon\\JWTAuth\\Payload
 */',
        'startLine' => 202,
        'endLine' => 205,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'getClaim' => 
      array (
        'name' => 'getClaim',
        'parameters' => 
        array (
          'claim' => 
          array (
            'name' => 'claim',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 213,
            'endLine' => 213,
            'startColumn' => 30,
            'endColumn' => 35,
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
 * Convenience method to get a claim value.
 *
 * @param  string  $claim
 * @return mixed
 */',
        'startLine' => 213,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'makePayload' => 
      array (
        'name' => 'makePayload',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Tymon\\JWTAuth\\Contracts\\JWTSubject',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 224,
            'endLine' => 224,
            'startColumn' => 33,
            'endColumn' => 51,
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
 * Create a Payload instance.
 *
 * @param  \\Tymon\\JWTAuth\\Contracts\\JWTSubject  $subject
 * @return \\Tymon\\JWTAuth\\Payload
 */',
        'startLine' => 224,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'getClaimsArray' => 
      array (
        'name' => 'getClaimsArray',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Tymon\\JWTAuth\\Contracts\\JWTSubject',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 235,
            'endLine' => 235,
            'startColumn' => 39,
            'endColumn' => 57,
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
 * Build the claims array and return it.
 *
 * @param  \\Tymon\\JWTAuth\\Contracts\\JWTSubject  $subject
 * @return array
 */',
        'startLine' => 235,
        'endLine' => 242,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'getClaimsForSubject' => 
      array (
        'name' => 'getClaimsForSubject',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Tymon\\JWTAuth\\Contracts\\JWTSubject',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 250,
            'endLine' => 250,
            'startColumn' => 44,
            'endColumn' => 62,
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
 * Get the claims associated with a given subject.
 *
 * @param  \\Tymon\\JWTAuth\\Contracts\\JWTSubject  $subject
 * @return array
 */',
        'startLine' => 250,
        'endLine' => 255,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'hashSubjectModel' => 
      array (
        'name' => 'hashSubjectModel',
        'parameters' => 
        array (
          'model' => 
          array (
            'name' => 'model',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 263,
            'endLine' => 263,
            'startColumn' => 41,
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
 * Hash the subject model and return it.
 *
 * @param  string|object  $model
 * @return string
 */',
        'startLine' => 263,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'checkSubjectModel' => 
      array (
        'name' => 'checkSubjectModel',
        'parameters' => 
        array (
          'model' => 
          array (
            'name' => 'model',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 274,
            'endLine' => 274,
            'startColumn' => 39,
            'endColumn' => 44,
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
 * Check if the subject model matches the one saved in the token.
 *
 * @param  string|object  $model
 * @return bool
 */',
        'startLine' => 274,
        'endLine' => 281,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'setToken' => 
      array (
        'name' => 'setToken',
        'parameters' => 
        array (
          'token' => 
          array (
            'name' => 'token',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 289,
            'endLine' => 289,
            'startColumn' => 30,
            'endColumn' => 35,
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
 * Set the token.
 *
 * @param  \\Tymon\\JWTAuth\\Token|string  $token
 * @return $this
 */',
        'startLine' => 289,
        'endLine' => 294,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'unsetToken' => 
      array (
        'name' => 'unsetToken',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Unset the current token.
 *
 * @return $this
 */',
        'startLine' => 301,
        'endLine' => 306,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'requireToken' => 
      array (
        'name' => 'requireToken',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensure that a token is available.
 *
 * @return void
 *
 * @throws \\Tymon\\JWTAuth\\Exceptions\\JWTException
 */',
        'startLine' => 315,
        'endLine' => 320,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'setRequest' => 
      array (
        'name' => 'setRequest',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 328,
            'endLine' => 328,
            'startColumn' => 32,
            'endColumn' => 47,
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
 * Set the request instance.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return $this
 */',
        'startLine' => 328,
        'endLine' => 333,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'lockSubject' => 
      array (
        'name' => 'lockSubject',
        'parameters' => 
        array (
          'lock' => 
          array (
            'name' => 'lock',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 341,
            'endLine' => 341,
            'startColumn' => 33,
            'endColumn' => 37,
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
 * Set whether the subject should be "locked".
 *
 * @param  bool  $lock
 * @return $this
 */',
        'startLine' => 341,
        'endLine' => 346,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'manager' => 
      array (
        'name' => 'manager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the Manager instance.
 *
 * @return \\Tymon\\JWTAuth\\Manager
 */',
        'startLine' => 353,
        'endLine' => 356,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'parser' => 
      array (
        'name' => 'parser',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the Parser instance.
 *
 * @return \\Tymon\\JWTAuth\\Http\\Parser\\Parser
 */',
        'startLine' => 363,
        'endLine' => 366,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'factory' => 
      array (
        'name' => 'factory',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the Payload Factory.
 *
 * @return \\Tymon\\JWTAuth\\Factory
 */',
        'startLine' => 373,
        'endLine' => 376,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      'blacklist' => 
      array (
        'name' => 'blacklist',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the Blacklist.
 *
 * @return \\Tymon\\JWTAuth\\Blacklist
 */',
        'startLine' => 383,
        'endLine' => 386,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 397,
            'endLine' => 397,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 397,
            'endLine' => 397,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Magically call the JWT Manager.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
        'startLine' => 397,
        'endLine' => 404,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Tymon\\JWTAuth',
        'declaringClassName' => 'Tymon\\JWTAuth\\JWT',
        'implementingClassName' => 'Tymon\\JWTAuth\\JWT',
        'currentClassName' => 'Tymon\\JWTAuth\\JWT',
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