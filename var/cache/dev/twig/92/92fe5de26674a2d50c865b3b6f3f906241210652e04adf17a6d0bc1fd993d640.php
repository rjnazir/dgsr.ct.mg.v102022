<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b057e14f79b7ccb386a5be65c0f455d5803489f526c59a6b789c12950fbbfd69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c900db1f5677c8beb5dcacd8bf25c511f124b0829fe1b8304d5e07f7fd0a9b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c900db1f5677c8beb5dcacd8bf25c511f124b0829fe1b8304d5e07f7fd0a9b8d->enter($__internal_c900db1f5677c8beb5dcacd8bf25c511f124b0829fe1b8304d5e07f7fd0a9b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a57deebbb8f2e94a4bd7f4522336cacbaaa5479952c66464380aa92b4fa7354c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57deebbb8f2e94a4bd7f4522336cacbaaa5479952c66464380aa92b4fa7354c->enter($__internal_a57deebbb8f2e94a4bd7f4522336cacbaaa5479952c66464380aa92b4fa7354c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c900db1f5677c8beb5dcacd8bf25c511f124b0829fe1b8304d5e07f7fd0a9b8d->leave($__internal_c900db1f5677c8beb5dcacd8bf25c511f124b0829fe1b8304d5e07f7fd0a9b8d_prof);

        
        $__internal_a57deebbb8f2e94a4bd7f4522336cacbaaa5479952c66464380aa92b4fa7354c->leave($__internal_a57deebbb8f2e94a4bd7f4522336cacbaaa5479952c66464380aa92b4fa7354c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
