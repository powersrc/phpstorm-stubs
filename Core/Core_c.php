<?php
/** @noinspection PhpUnused */
/** @noinspection PhpMissingParentConstructorInspection */
/** @noinspection PhpInconsistentReturnPointsInspection */
/** @noinspection PhpLanguageLevelInspection */

// Start of Core v.5.3.6-13ubuntu3.2

/**
 * Created by typecasting to object.
 * @link https://php.net/manual/en/reserved.classes.php
 */
class stdClass {
}

/**
 * @link https://wiki.php.net/rfc/iterable
 */
interface iterable {}

/**
 * Interface to detect if a class is traversable using foreach.
 * Abstract base interface that cannot be implemented alone.
 * Instead it must be implemented by either {@see IteratorAggregate} or {@see Iterator}.
 *
 * @link https://php.net/manual/en/class.traversable.php
 */
interface Traversable extends iterable {
}

/**
 * Interface to create an external Iterator.
 * @link https://php.net/manual/en/class.iteratoraggregate.php
 */
interface IteratorAggregate extends Traversable {

    /**
     * Retrieve an external iterator
     * @link https://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator(): Traversable;
}

/**
 * Interface for external iterators or objects that can be iterated
 * themselves internally.
 * @link https://php.net/manual/en/class.iterator.php
 */
interface Iterator extends Traversable {

    /**
     * Return the current element
     * @link https://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current();

    /**
     * Move forward to next element
     * @link https://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next(): void;

    /**
     * Return the key of the current element
     * @link https://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key();

    /**
     * Checks if current position is valid
     * @link https://php.net/manual/en/iterator.valid.php
     * @return bool The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid(): bool;

    /**
     * Rewind the Iterator to the first element
     * @link https://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind(): void;
}

/**
 * Interface to provide accessing objects as arrays.
 * @link https://php.net/manual/en/class.arrayaccess.php
 */
interface ArrayAccess {

    /**
     * Whether a offset exists
     * @link https://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return bool true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset): bool;

    /**
     * Offset to retrieve
     * @link https://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset);

    /**
     * Offset to set
     * @link https://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value): void;

    /**
     * Offset to unset
     * @link https://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset): void;
}

/**
 * Interface for customized serializing.
 * @link https://php.net/manual/en/class.serializable.php
 */
interface Serializable {

    /**
     * String representation of object
     * @link https://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize(): string;

    /**
     * Constructs the object
     * @link https://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize(string $serialized): void;
}


/**
 * Throwable is the base interface for any object that can be thrown via a throw statement in PHP 7,
 * including Error and Exception.
 * @link https://php.net/manual/en/class.throwable.php
 * @since 7.0
 */
interface Throwable
{

    /**
     * Gets the message
     * @link https://php.net/manual/en/throwable.getmessage.php
     * @return string
     * @since 7.0
     */
    public function getMessage(): string;

    /**
     * Gets the exception code
     * @link https://php.net/manual/en/throwable.getcode.php
     * @return int <p>
     * Returns the exception code as integer in
     * {@see Exception} but possibly as other type in
     * {@see Exception} descendants (for example as
     * string in {@see PDOException}).
     * </p>
     * @since 7.0
     */
    public function getCode();

    /**
     * Gets the file in which the exception occurred
     * @link https://php.net/manual/en/throwable.getfile.php
     * @return string Returns the name of the file from which the object was thrown.
     * @since 7.0
     */
    public function getFile(): string;

    /**
     * Gets the line on which the object was instantiated
     * @link https://php.net/manual/en/throwable.getline.php
     * @return int Returns the line number where the thrown object was instantiated.
     * @since 7.0
     */
    public function getLine(): int;

    /**
     * Gets the stack trace
     * @link https://php.net/manual/en/throwable.gettrace.php
     * @return array <p>
     * Returns the stack trace as an array in the same format as
     * {@see debug_backtrace()}.
     * </p>
     * @since 7.0
     */
    public function getTrace(): array;

    /**
     * Gets the stack trace as a string
     * @link https://php.net/manual/en/throwable.gettraceasstring.php
     * @return string Returns the stack trace as a string.
     * @since 7.0
     */
    public function getTraceAsString(): string;

    /**
     * Returns the previous Throwable
     * @link https://php.net/manual/en/throwable.getprevious.php
     * @return Throwable Returns the previous {@see Throwable} if available, or <b>NULL</b> otherwise.
     * @since 7.0
     */
    public function getPrevious(): Throwable;

    /**
     * Gets a string representation of the thrown object
     * @link https://php.net/manual/en/throwable.tostring.php
     * @return string <p>Returns the string representation of the thrown object.</p>
     * @since 7.0
     */
    public function __toString(): string;
}
/**
 * Exception is the base class for
 * all Exceptions.
 * @link https://php.net/manual/en/class.exception.php
 */
class Exception implements Throwable {
    protected $message;
    protected $code;
    protected $file;
    protected $line;


    /**
     * Clone the exception
     * Tries to clone the Exception, which results in Fatal error.
     * @link https://php.net/manual/en/exception.clone.php
     * @return void
     * @since 5.1.0
     */
    final private function __clone() { }

    /**
     * Construct the exception. Note: The message is NOT binary safe.
     * @link https://php.net/manual/en/exception.construct.php
     * @param string $message [optional] The Exception message to throw.
     * @param int $code [optional] The Exception code.
     * @param Throwable $previous [optional] The previous throwable used for the exception chaining.
     * @since 5.1.0
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null) { }

    /**
     * Gets the Exception message
     * @link https://php.net/manual/en/exception.getmessage.php
     * @return string the Exception message as a string.
     * @since 5.1.0
     */
    final public function getMessage(): string { }

    /**
     * Gets the Exception code
     * @link https://php.net/manual/en/exception.getcode.php
     * @return mixed|int the exception code as integer in
     * <b>Exception</b> but possibly as other type in
     * <b>Exception</b> descendants (for example as
     * string in <b>PDOException</b>).
     * @since 5.1.0
     */
    final public function getCode() { }

    /**
     * Gets the file in which the exception occurred
     * @link https://php.net/manual/en/exception.getfile.php
     * @return string the filename in which the exception was created.
     * @since 5.1.0
     */
    final public function getFile(): string { }

    /**
     * Gets the line in which the exception occurred
     * @link https://php.net/manual/en/exception.getline.php
     * @return int the line number where the exception was created.
     * @since 5.1.0
     */
    final public function getLine(): int { }

    /**
     * Gets the stack trace
     * @link https://php.net/manual/en/exception.gettrace.php
     * @return array the Exception stack trace as an array.
     * @since 5.1.0
     */
    final public function getTrace(): array { }

    /**
     * Returns previous Exception
     * @link https://php.net/manual/en/exception.getprevious.php
     * @return Exception the previous <b>Exception</b> if available
     * or null otherwise.
     * @since 5.3.0
     */
    final public function getPrevious(): Throwable { }

    /**
     * Gets the stack trace as a string
     * @link https://php.net/manual/en/exception.gettraceasstring.php
     * @return string the Exception stack trace as a string.
     * @since 5.1.0
     */
    final public function getTraceAsString(): string { }

    /**
     * String representation of the exception
     * @link https://php.net/manual/en/exception.tostring.php
     * @return string the string representation of the exception.
     * @since 5.1.0
     */
    public function __toString(): string { }

    public function __wakeup() { }
}

/**
 * Error is the base class for all internal PHP error exceptions.
 * @link https://php.net/manual/en/class.error.php
 * @since 7.0
 */
class Error implements Throwable {

    /**
     * Construct the error object.
     * @link https://php.net/manual/en/error.construct.php
     * @param string $message [optional] The Error message to throw.
     * @param int $code [optional] The Error code.
     * @param Throwable $previous [optional] The previous throwable used for the exception chaining.
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
    }

    /***
     * Gets the message
     * @link https://php.net/manual/en/throwable.getmessage.php
     * @return string
     * @since 7.0
     */
    public final function getMessage(): string
    {
    }

    /**
     * Gets the exception code
     * @link https://php.net/manual/en/throwable.getcode.php
     * @return int <p>
     * Returns the exception code as integer in
     * {@see Exception} but possibly as other type in
     * {@see Exception} descendants (for example as
     * string in {@see PDOException}).
     * </p>
     * @since 7.0
     */
    public final function getCode(): int{}


    /**
     * Gets the file in which the exception occurred
     * @link https://php.net/manual/en/throwable.getfile.php
     * @return string Returns the name of the file from which the object was thrown.
     * @since 7.0
     */
    public final function getFile(): string{}


    /**
     * Gets the line on which the object was instantiated
     * @link https://php.net/manual/en/throwable.getline.php
     * @return int Returns the line number where the thrown object was instantiated.
     * @since 7.0
     */
    public final function getLine(): int{}


    /**
     * Gets the stack trace
     * @link https://php.net/manual/en/throwable.gettrace.php
     * @return array <p>
     * Returns the stack trace as an array in the same format as
     * {@see debug_backtrace()}.
     * </p>
     * @since 7.0
     */
    public final function getTrace(): array{}

    /**
     * Gets the stack trace as a string
     * @link https://php.net/manual/en/throwable.gettraceasstring.php
     * @return string Returns the stack trace as a string.
     * @since 7.0
     */
    public final function getTraceAsString(): string{}

    /**
     * Returns the previous Throwable
     * @link https://php.net/manual/en/throwable.getprevious.php
     * @return Throwable Returns the previous {@see Throwable} if available, or <b>NULL</b> otherwise.
     * @since 7.0
     */
    public final function getPrevious(): Throwable{}
    /**
     * Gets a string representation of the thrown object
     * @link https://php.net/manual/en/throwable.tostring.php
     * @return string <p>Returns the string representation of the thrown object.</p>
     * @since 7.0
     */
    public function __toString(): string{}

    /**
     * Clone the error
     * Error can not be clone, so this method results in fatal error.
     * @return void
     * @link https://php.net/manual/en/error.clone.php
     */
    private final function __clone(){}

    public function __wakeup(){}
}

/**
 * There are three scenarios where a TypeError may be thrown.
 * The first is where the argument type being passed to a function does not match its corresponding declared
 * parameter type. The second is where a value being returned from a function does not match the declared function return type. The third is where an
 * invalid number of arguments are passed to a built-in PHP function (strict mode only).
 * @link https://php.net/manual/en/class.typeerror.php
 * @since 7.0
 */
class TypeError extends Error {

}

/**
 * ParseError is thrown when an error occurs while parsing PHP code, such as when {@see eval()} is called.
 * @link https://php.net/manual/en/class.parseerror.php
 * @since 7.0
 */
class ParseError extends CompileError {

}

/**
 * ArgumentCountError is thrown when too few arguments are passed to a user
 * defined routine.
 *
 * @since 7.1
 * @see https://php.net/migration71.incompatible#migration71.incompatible.too-few-arguments-exception
 */
class ArgumentCountError extends TypeError {}

/**
 * ArithmeticError is thrown when an error occurs while performing mathematical operations.
 * In PHP 7.0, these errors include attempting to perform a bitshift by a negative amount,
 * and any call to {@see intdiv()} that would result in a value outside the possible bounds of an integer.
 * @link https://php.net/manual/en/class.arithmeticerror.php
 * @since 7.0
 */
class ArithmeticError extends Error {

}

/**
 * Class CompileError
 * @link https://secure.php.net/manual/en/class.compileerror.php
 * @since 7.3
 */
class CompileError extends Error {

}

/**
 * DivisionByZeroError is thrown when an attempt is made to divide a number by zero.
 * @link https://php.net/manual/en/class.divisionbyzeroerror.php
 * @since 7.0
 */
class DivisionByZeroError extends ArithmeticError {

}

/**
 * An Error Exception.
 * @link https://php.net/manual/en/class.errorexception.php
 */
class ErrorException extends Exception {

    protected $severity;


    /**
     * Constructs the exception
     * @link https://php.net/manual/en/errorexception.construct.php
     * @param string $message [optional] The Exception message to throw.
     * @param int $code [optional] The Exception code.
     * @param int $severity [optional] The severity level of the exception.
     * @param string $filename [optional] The filename where the exception is thrown.
     * @param int $lineno [optional] The line number where the exception is thrown.
     * @param Exception $previous [optional] The previous exception used for the exception chaining.
     * @since 5.1.0
     */
    public function __construct(string $message = "", int $code = 0, int $severity = E_ERROR, string $filename = __FILE__, int $lineno = __LINE__, Exception $previous = null) { }

    /**
     * Gets the exception severity
     * @link https://php.net/manual/en/errorexception.getseverity.php
     * @return int the severity level of the exception.
     * @since 5.1.0
     */
    final public function getSeverity(): int { }
}

/**
 * Class used to represent anonymous functions.
 * <p>Anonymous functions, implemented in PHP 5.3, yield objects of this type.
 * This fact used to be considered an implementation detail, but it can now be relied upon.
 * Starting with PHP 5.4, this class has methods that allow further control of the anonymous function after it has been created.
 * <p>Besides the methods listed here, this class also has an __invoke method.
 * This is for consistency with other classes that implement calling magic, as this method is not used for calling the function.
 * @link https://secure.php.net/manual/en/class.closure.php
 */
final class Closure {

    /**
     * This method exists only to disallow instantiation of the Closure class.
     * Objects of this class are created in the fashion described on the anonymous functions page.
     * @link https://secure.php.net/manual/en/closure.construct.php
     */
    private function __construct() { }

    /**
     * This is for consistency with other classes that implement calling magic,
     * as this method is not used for calling the function.
     * @param mixed $_ [optional]
     * @return mixed
     * @link https://secure.php.net/manual/en/class.closure.php
     */
    public function __invoke(...$_) { }

    /**
     * Duplicates the closure with a new bound object and class scope
     * @link https://secure.php.net/manual/en/closure.bindto.php
     * @param object $newthis The object to which the given anonymous function should be bound, or NULL for the closure to be unbound.
     * @param mixed $newscope The class scope to which associate the closure is to be associated, or 'static' to keep the current one.
     * If an object is given, the type of the object will be used instead.
     * This determines the visibility of protected and private methods of the bound object.
     * @return Closure Returns the newly created Closure object or FALSE on failure
     */
    function bindTo($newthis, $newscope = 'static'): Closure { }

    /**
     * This method is a static version of Closure::bindTo().
     * See the documentation of that method for more information.
     * @static
     * @link https://secure.php.net/manual/en/closure.bind.php
     * @param Closure $closure The anonymous functions to bind.
     * @param object $newthis The object to which the given anonymous function should be bound, or NULL for the closure to be unbound.
     * @param mixed $newscope The class scope to which associate the closure is to be associated, or 'static' to keep the current one.
     * If an object is given, the type of the object will be used instead.
     * This determines the visibility of protected and private methods of the bound object.
     * @return Closure Returns the newly created Closure object or FALSE on failure
     */
    static function bind(Closure $closure, $newthis, $newscope = 'static'): Closure { }

    /**
     * Temporarily binds the closure to newthis, and calls it with any given parameters.
     * @link https://php.net/manual/en/closure.call.php
     * @param object $newthis The object to bind the closure to for the duration of the call.
     * @param mixed $parameters [optional] Zero or more parameters, which will be given as parameters to the closure.
     * @return mixed
     * @since 7.0
     */
    function call ($newthis, ...$parameters) {}
    
    /**
     * @param callable $callable
     * @return Closure
     * @since 7.1
     */
    public static function fromCallable (callable $callable): Closure {}
}

/**
 * Classes implementing <b>Countable</b> can be used with the
 * <b>count</b> function.
 * @link https://php.net/manual/en/class.countable.php
 */
interface Countable {

    /**
     * Count elements of an object
     * @link https://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count(): int;
}
