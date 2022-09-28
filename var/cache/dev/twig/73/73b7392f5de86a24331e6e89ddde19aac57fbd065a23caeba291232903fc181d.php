<?php

/* @Admin/CtUtilisation/add.html.twig */
class __TwigTemplate_a20516a1b6517181ddf311e9ad43c2283c5b904966a70ae82e8a04bde642f3bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUtilisation/add.html.twig", 1);
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
        $__internal_e20ec7a84761bf124c5d5ce45f58cd5ff5eb54ebc0accf8562ce1fe0549a8690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20ec7a84761bf124c5d5ce45f58cd5ff5eb54ebc0accf8562ce1fe0549a8690->enter($__internal_e20ec7a84761bf124c5d5ce45f58cd5ff5eb54ebc0accf8562ce1fe0549a8690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/add.html.twig"));

        $__internal_4accf0f8f7afc34bb229dc0cee37342a58bbef3a2eb9ed58b242b27c69b5ba07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4accf0f8f7afc34bb229dc0cee37342a58bbef3a2eb9ed58b242b27c69b5ba07->enter($__internal_4accf0f8f7afc34bb229dc0cee37342a58bbef3a2eb9ed58b242b27c69b5ba07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_utilisation"] = true;
        // line 8
        $context["menu_utilisation_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e20ec7a84761bf124c5d5ce45f58cd5ff5eb54ebc0accf8562ce1fe0549a8690->leave($__internal_e20ec7a84761bf124c5d5ce45f58cd5ff5eb54ebc0accf8562ce1fe0549a8690_prof);

        
        $__internal_4accf0f8f7afc34bb229dc0cee37342a58bbef3a2eb9ed58b242b27c69b5ba07->leave($__internal_4accf0f8f7afc34bb229dc0cee37342a58bbef3a2eb9ed58b242b27c69b5ba07_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9039e4f6e9f857140c96e13cffd953c830d71b27917134d009a6a9a9f807103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9039e4f6e9f857140c96e13cffd953c830d71b27917134d009a6a9a9f807103->enter($__internal_b9039e4f6e9f857140c96e13cffd953c830d71b27917134d009a6a9a9f807103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1b7bdbaaa70a765bcd045eac1718017602130f741838a631350c0d340c19c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b7bdbaaa70a765bcd045eac1718017602130f741838a631350c0d340c19c67->enter($__internal_b1b7bdbaaa70a765bcd045eac1718017602130f741838a631350c0d340c19c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_b1b7bdbaaa70a765bcd045eac1718017602130f741838a631350c0d340c19c67->leave($__internal_b1b7bdbaaa70a765bcd045eac1718017602130f741838a631350c0d340c19c67_prof);

        
        $__internal_b9039e4f6e9f857140c96e13cffd953c830d71b27917134d009a6a9a9f807103->leave($__internal_b9039e4f6e9f857140c96e13cffd953c830d71b27917134d009a6a9a9f807103_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_da92d8c5c2e1611f2eab53969d8ce9b94c7e1c64acb389f61cbfa43719b379fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da92d8c5c2e1611f2eab53969d8ce9b94c7e1c64acb389f61cbfa43719b379fb->enter($__internal_da92d8c5c2e1611f2eab53969d8ce9b94c7e1c64acb389f61cbfa43719b379fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84949d23e9475df65920861efb2301e6b3bf8c5c19548c554fdcedbd93cd9e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84949d23e9475df65920861efb2301e6b3bf8c5c19548c554fdcedbd93cd9e93->enter($__internal_84949d23e9475df65920861efb2301e6b3bf8c5c19548c554fdcedbd93cd9e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "utLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_utilisation\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_84949d23e9475df65920861efb2301e6b3bf8c5c19548c554fdcedbd93cd9e93->leave($__internal_84949d23e9475df65920861efb2301e6b3bf8c5c19548c554fdcedbd93cd9e93_prof);

        
        $__internal_da92d8c5c2e1611f2eab53969d8ce9b94c7e1c64acb389f61cbfa43719b379fb->leave($__internal_da92d8c5c2e1611f2eab53969d8ce9b94c7e1c64acb389f61cbfa43719b379fb_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUtilisation/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Catégorie {% endblock %}

{% set menu_utilisation        = true %}
{% set menu_utilisation_create = true %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.utLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_utilisation\"/>
                        <a href=\"{{ path('utilisation_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtUtilisation/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUtilisation\\add.html.twig");
    }
}
