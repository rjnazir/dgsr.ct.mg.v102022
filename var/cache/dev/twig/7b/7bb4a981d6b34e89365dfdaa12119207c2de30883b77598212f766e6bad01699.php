<?php

/* AdminBundle:CtMotif:edit.html.twig */
class __TwigTemplate_7ddacbd3c1b8cae560ee8d0ad99806606d9938bd5027ed805427dc4118994391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMotif:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2729f7af004b0823c035f520f7040be66dfa2af87e2944a92efb59d22ec9aefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2729f7af004b0823c035f520f7040be66dfa2af87e2944a92efb59d22ec9aefc->enter($__internal_2729f7af004b0823c035f520f7040be66dfa2af87e2944a92efb59d22ec9aefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:edit.html.twig"));

        $__internal_47c4fde16c43bb1f2719e22f74153ab847e032d6a106ed1aa9f22ed5e5a27ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c4fde16c43bb1f2719e22f74153ab847e032d6a106ed1aa9f22ed5e5a27ef3->enter($__internal_47c4fde16c43bb1f2719e22f74153ab847e032d6a106ed1aa9f22ed5e5a27ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2729f7af004b0823c035f520f7040be66dfa2af87e2944a92efb59d22ec9aefc->leave($__internal_2729f7af004b0823c035f520f7040be66dfa2af87e2944a92efb59d22ec9aefc_prof);

        
        $__internal_47c4fde16c43bb1f2719e22f74153ab847e032d6a106ed1aa9f22ed5e5a27ef3->leave($__internal_47c4fde16c43bb1f2719e22f74153ab847e032d6a106ed1aa9f22ed5e5a27ef3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7efda9f93025dfbaaecc2314dbf64608cb7063e1bfda346b2f7886efbd5477c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7efda9f93025dfbaaecc2314dbf64608cb7063e1bfda346b2f7886efbd5477c8->enter($__internal_7efda9f93025dfbaaecc2314dbf64608cb7063e1bfda346b2f7886efbd5477c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5564cdf4b126941d8168992f45d3d31ece13524f6332c2b9f97ca66b63b8a5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5564cdf4b126941d8168992f45d3d31ece13524f6332c2b9f97ca66b63b8a5d4->enter($__internal_5564cdf4b126941d8168992f45d3d31ece13524f6332c2b9f97ca66b63b8a5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Motif ";
        
        $__internal_5564cdf4b126941d8168992f45d3d31ece13524f6332c2b9f97ca66b63b8a5d4->leave($__internal_5564cdf4b126941d8168992f45d3d31ece13524f6332c2b9f97ca66b63b8a5d4_prof);

        
        $__internal_7efda9f93025dfbaaecc2314dbf64608cb7063e1bfda346b2f7886efbd5477c8->leave($__internal_7efda9f93025dfbaaecc2314dbf64608cb7063e1bfda346b2f7886efbd5477c8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_61d830177dd9f64bface80d8ca06de4a9db7b8485cf79e4456b3311d82896c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d830177dd9f64bface80d8ca06de4a9db7b8485cf79e4456b3311d82896c30->enter($__internal_61d830177dd9f64bface80d8ca06de4a9db7b8485cf79e4456b3311d82896c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd97a99f01a937aeabe04754faf548e11c7cc7aa88b663ef37b3fc16eff27fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd97a99f01a937aeabe04754faf548e11c7cc7aa88b663ef37b3fc16eff27fc7->enter($__internal_bd97a99f01a937aeabe04754faf548e11c7cc7aa88b663ef37b3fc16eff27fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une motif</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mtfLibelle", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mtfIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_bd97a99f01a937aeabe04754faf548e11c7cc7aa88b663ef37b3fc16eff27fc7->leave($__internal_bd97a99f01a937aeabe04754faf548e11c7cc7aa88b663ef37b3fc16eff27fc7_prof);

        
        $__internal_61d830177dd9f64bface80d8ca06de4a9db7b8485cf79e4456b3311d82896c30->leave($__internal_61d830177dd9f64bface80d8ca06de4a9db7b8485cf79e4456b3311d82896c30_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMotif:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 36,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Motif {% endblock %}

{% set menu_motif = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une motif</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.mtfLibelle) }}
                        {{ form_row(edit_form.mtfIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"{{ path('motif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMotif:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMotif/edit.html.twig");
    }
}
